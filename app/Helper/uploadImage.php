<?php
namespace App\Helper;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

trait uploadImage{
    public function uploadImage(Request $request)
    {
        # code...php artisan storage:link ==>
                // The [D:\xampp741\htdocs\laravel1\public\storage] 
                // link has been connected to 
                // [D:\xampp741\htdocs\laravel1\storage\app/public].
                // The links have been created.
        if ($request->hasFile("image_link")) {
            $folder = "product"; $public = "public/"; // folder public là bắt buộc để tải ảnh vào đúng storage;
            $image = $request->file("image_link");
            // $real_name = $image->getClientOriginalName(); // ít dùng
            $file_type = $image->getClientOriginalExtension(); // type of image

            $sm_folder = Auth::check() ? '/'.auth()->id() : '/default';
            $file_up_name = Str::random(14).'.'.$file_type;
            $folder_name = 'images/'.$folder.$sm_folder; 
            $res = $image->storeAs($public.$folder_name, $file_up_name); // upload image vào storage với ánh xạ qua public
            // $path = $image->move($folder_name, $file_up_name); // chuyển thẳng ảnh vào public(ít dùng)
            $file_path = "storage/".$folder_name.'/'.$file_up_name;
            return ["file_name" => $file_up_name, "file_path" => $file_path];
        }
    }

    public function upload_multi_image(Request $request, $pro_id)
    {
        # code...
        if ($request->hasFile("image_links")) {
            $images = $request->file("image_links");
            $folder = "product"; $public = "public/";
            if (count($images)) {
                foreach ($images as $key => $image) {
                    $file_type = $image->getClientOriginalExtension();
                    $file_up_name = Str::random(14).'.'.$file_type;
                    $sm_folder = Auth::check() ? '/'.auth()->id() : '/default';
                    $folder_name = 'more_images/'.$folder.$sm_folder;
                    $res = $image->storeAs($public.$folder_name, $file_up_name);
                    $file_lnks = "storage/".$folder_name.'/'.$file_up_name;
                    // "INSERT INTO product_images(product_id, link) VALUES($pro_id, $file_lnks)";
                    DB::insert('INSERT into product_images (product_id, link) VALUES (?, ?)', [$pro_id, $file_lnks]);
                }
            }
        }
        
    }
}
?>