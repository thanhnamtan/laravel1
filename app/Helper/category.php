<?php

namespace App\Helper;
use App\Models\categoryModel;

trait category{
    protected $categories;
    protected $checked_categories;

    public function all_categories()
    {
        # code...
        return categoryModel::all();
    }

    public function categories_html($checked_categories = [])
    {
        # code...
        $this->checked_categories = $checked_categories;
        $options = "<option value='0'>root category</option>";
        return $options.$this->loop_options();
    }

    protected function loop_options($parent_id = 0, &$options = '', $key = "__")
    {
        $category_chils = categoryModel::where("parent_id", "=",$parent_id)->get();
        if (count($category_chils)) {
            foreach ($category_chils as $category_chil) {
                $checked = "";
                if (in_array($category_chil->id, $this->checked_categories)) {
                    $checked = "selected";
                }
                $options.= "<option value='".$category_chil->id."' $checked >".$key.$category_chil->name."</option>";
                $this->loop_options($category_chil->id, $options, $key."__");
            }
        }
        return $options;
    }
}

?>