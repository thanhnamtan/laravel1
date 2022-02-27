<?php
use Illuminate\Support\Facades\Route;

Route::get("/", "homeController@home")->name("home");

Route::group(["prefix" => "product"], function(){
    Route::get("list", "productController@list")->name("product_list");

    Route::get("detail/{pro_id}", "productController@detail")->name("product_detail");
});

Route::group(["prefix" => "category"], function(){
    Route::get("list", "categoryController@listCategory")->name("category_list");
});


Route::group(["prefix" => "user"], function(){

    Route::get("detail", "UsermodelController@detail")->name("user_detail");

    Route::post("login", "UsermodelController@login")->name("user_login");

    Route::any("logout", "UsermodelController@logout")->name("user_logout");

});



Route::group(["prefix" => "admin"], function(){
    
    Route::get("", "adminController@home")->name("adminhtml.home");

    Route::group(["prefix" => "category"], function(){

        Route::get("list", "categoryController@listCategory")->name("admin_cate_list");

        Route::get("addCategory", "categoryController@addCategory")->name("admin_cate_add");

        Route::post("insert", "categoryController@insertCategory")->name("admin_cate_insert"); 

        Route::get("edit/{category_id}", "categoryController@editCategory")->name("admin_cate_edit");

        Route::post("update-{category_id}", "categoryController@updateCategory")->name("admin_cate_update");

        Route::any("delete/{category_id}", "categoryController@deleteCategory")->name("admin_cate_delete");
    });

    Route::group(["prefix" => "product"], function(){
        Route::get("list", "productController@admin_list")->name("admin_product_list");

        Route::get("add", "productController@admin_add")->name("admin_product_addProduct");

        Route::post("insert", "productController@admin_insert")->name("admin_product_insert");

        Route::get("edit/{product_id}", "productController@admin_edit")->name("admin_product_edit");

        Route::post("update/{product_id}", "productController@admin_update")->name("admin_product_update");

        Route::any("delete/{product_id}", "productController@admin_delete")->name("admin_product_delete");
    });
});
