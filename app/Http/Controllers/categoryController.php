<?php

namespace App\Http\Controllers;

use App\Models\categoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class categoryController extends Controller
{
    //
    public function listCategory()
    {
        # code...
        // return "category page";
        // return response(['a' => 123, 'b' => 222], 200); // return json
        $categories = categoryModel::all();
        return view("adminhtml/templates/categories/cate_list", ["categories" => $categories]);
    }

    public function insertCategory(Request $request)
    {
        # code...
        // return "insert category page";
        $cate_name = $request->get("category_name");
        $parent_id = $request->get("parent_id");
        $active = (int) $request->get("active");
        $des = $request->get("description") ?? "";

        $res = categoryModel::create(['name' => $cate_name, "active" => $active, "parent_id" => $parent_id,'description' => $des]);

        return redirect()->back()->with("status", $res ? "da them thanh cong" : "chua them duoc");
        
    }

    public function addCategory(Request $request)
    {
        $options = "<option value='0' selected>root category</option>";
        $options.= $this->loop_options();
        return view("adminhtml.templates.categories.cate_add", ['parent_options' => $options]);
    }

    protected function loop_options($parent_id = 0, &$options = '', $key = "__")
    {
        $value = "";
        $category_chils = categoryModel::where("parent_id", "=",$parent_id)->get();
        if (count($category_chils)) {
            foreach ($category_chils as $category_chil) {
                $options.= "<option value='".$category_chil->id."'>".$key.$category_chil->name."</option>";
                $this->loop_options($category_chil->id, $options, $key."__");
            }
        }
        return $options;
    }

    public function editCategory(Request $request)
    {
        # code...
        $category = categoryModel::find((int) $request->__get("category_id"));
        return view("adminhtml.templates.categories.cate_edit", ["category" => $category]);
    }

    public function updateCategory(Request $request)
    {
        # code...
        try {
            $category = categoryModel::find($request->__get("category_id"));
            $category->name = $request->category_name;
            $category->active = $request->active ?? 0;
            $category->save();
            return redirect()->back()->with("message", "updated for category: $category->name");
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with("message", "can not update for category: $category->name");
        }
      
    }

    public function deleteCategory(Request $request)
    {
        # code...
        // return "delete category page";
        try {
            $category = categoryModel::find((int)$request->__get("category_id"));
            $name = $category->name;
            $category->delete();
    
            return redirect()->back()->with("status", "delete for category: $name");
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with("status", "can not delete for category: $name");
        }
      
    }
}
