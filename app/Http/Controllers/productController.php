<?php

namespace App\Http\Controllers;

use App\Helper\category;
use App\Helper\uploadImage;
use App\Models\product_category;
use App\Models\productModel;
use Illuminate\Http\Request;

class productController extends Controller
{
    use category;
    use uploadImage;
    //
    public function list(Request $request)
    {
        return view("frontend.templates.list");
    }

    public function detail(Request $request)
    {
        // return "product detail page"; // return text
        return $request->__get("pro_id"); // get param from controller
    }

    public function admin_list()
    {
        # code...
        $product_list = productModel::all();
        return view("adminhtml.templates.products.pro_list", ["product_list" => $product_list]);
    }

    public function admin_add()
    {
        # code...
        $categores = $this->categories_html();
        return view("adminhtml.templates.products.pro_add", ["categories" => $categores]);
    }

    public function admin_insert(Request $request)
    {
        $pro_name = $request->get("pro_name");
        $pro_title = $request->get("pro_title");
        $pro_content = $request->get('pro_content');
        $pro_categories = $request->get("pro_categories");
        $pro_price = $request->get("pro_price");
        $pro_sale_off = $request->get("pro_sale_off");
        $pro_type = $request->get("pro_type", "simple");
        $active = $request->get('active');

        try {
            $upload_image = $this->uploadImage($request);
            $pro = productModel::create([
                'name'=> $pro_name,
                "active" => (int) $active,
                "price" => (int) $pro_price,
                "sale_off" => $pro_sale_off,
                "description" => $pro_title,
                "content" => $pro_content,
                'type' => $pro_type,
                "image_link" => $upload_image["file_path"]
            ]);
            if ($pro) {
                $this->upload_multi_image($request, $pro->id);
                $this->add_pro_category($pro->id, is_array($pro_categories) ? $pro_categories : [$pro_categories]);
            }

            return redirect()->back()->with("status", "upload success");
        } catch (\Throwable $th) {
           return redirect()->back()->with("status", "upload fail");
        }
    }

    public function admin_edit(Request $request)
    {
        $pro_id = $request->__get("product_id");
        $pro_data = productModel::find((int) $pro_id);
        $checked_categories = array_map(function($category){
            return $category["category_id"];
        }, $pro_data->product_category->toarray());

        $categories = $this->categories_html($checked_categories);
        return view("adminhtml.templates.products.pro_edit", ["product" => $pro_data, "categories" => $categories]);
        // dd($pro_data->images_links);
        // dd($pro_data->product_category);
    }

    public function admin_upgrade(Request $request)
    {
        # code...
    }

    public function admin_delete(Request $request)
    {
        # code...
    }

    protected function add_pro_category($pro_id, $category_ids)
    {
        foreach ($category_ids as $category_id) {
            product_category::firstOrCreate(["product_id" => $pro_id, "category_id" => $category_id]);
        }
        
    }
}
