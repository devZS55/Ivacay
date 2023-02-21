<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Faker\Provider\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\CategoriesModel;
use App\Models\ProductImageModel;
use App\Models\SubCategoriesModel;
use App\Models\ProductsModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminProductDetailsController extends Controller
{
    /**-------------------------------Categories Functions------------------------------------*/
    function categories_list()
    {
        $categories = CategoriesModel::get();
        return view('admin.product-details.categories.categories-list',compact('categories'));
    }
    function categories_add()
    {
        return view('admin.product-details.categories.categories-add');
    }
    function categories_edit($id)
    {
        $categories = CategoriesModel::where('id',$id)->first();
        return view('admin.product-details.categories.categories-edit',compact('categories'));
    }
    function categories_delete(CategoriesModel $categories)
    {
        $categories->delete();
        return back()->with('delete','Deleted Successfully');
    }
    function categories_add_edit_data(Request $request,CategoriesModel $categories)
    {
        $create = 1;
        (isset($categories->id) and $categories->id>0)?$create=0:$create=1;
        if($request->hasFile('images'))
        {
            $imageName = time().'.'.$request->images->getClientOriginalExtension();
            $request->images->move(public_path('/uploads/categories'), $imageName);
            $categories->images = $imageName;
        }
        $categories->title = $request->title;
        $categories->status = $request->status;
        $categories->save();
        if($create == 0)
        {
            return back()->with('update','Updated Successfully');
        }
        else
        {
            return back()->with('success','Added Successfully');
        }
    }

    /**-------------------------------Sub-Categories Functions------------------------------------*/
    function sub_categories_list()
    {
        $sub_categories = SubCategoriesModel::with('getcategories')->get();
        //dd($sub_categories);
        return view('admin.product-details.sub-categories.sub-categories-list',compact('sub_categories'));
    }
    function sub_categories_add()
    {
        $parent_categories = CategoriesModel::where('status','1')->orderBy('id','ASC')->get();
        return view('admin.product-details.sub-categories.sub-categories-add',compact('parent_categories'));
    }
    function sub_categories_edit($id)
    {
        $parent_categories = CategoriesModel::where('status','1')->orderBy('id','ASC')->get();
        $sub_categories = SubCategoriesModel::with('getcategories')->where('id',$id)->first();
        return view('admin.product-details.sub-categories.sub-categories-edit',compact('sub_categories','parent_categories'));
    }
    function sub_categories_delete(SubCategoriesModel $sub_categories)
    {
        $sub_categories->delete();
        return back()->with('delete','Deleted Successfully');
    }
    function sub_categories_add_edit_data(Request $request,SubCategoriesModel $sub_categories)
    {
        $create = 1;
        (isset($sub_categories->id) and $sub_categories->id>0)?$create=0:$create=1;
        $sub_categories->title = $request->title;
        $sub_categories->parent_category = $request->parent_category;
        $sub_categories->status = $request->status;
        $sub_categories->save();
        if($create == 0)
        {
            return back()->with('update','Updated Successfully');
        }
        else
        {
            return back()->with('success','Added Successfully');
        }
    }

    /**-------------------------------Product Functions------------------------------------*/
    function products_list()
    {
        $products = ProductsModel::with('images_take1')->get();
        return view('admin.product-details.products.products-list',compact('products'));
    }
    function products_add()
    {
        $sub_categories = SubCategoriesModel::where('status','1')->orderBy('id','ASC')->get();
        return view('admin.product-details.products.products-add',compact('sub_categories'));
    }
    function products_edit($id)
    {
        $sub_categories = SubCategoriesModel::where('status','1')->orderBy('id','ASC')->get();
        $products = ProductsModel::where('id',$id)->first();
        $product_images = ProductImageModel::where('product_id',$id)->get();
        return view('admin.product-details.products.products-edit',compact('products','sub_categories','product_images'));
    }
    function products_delete(ProductsModel $products)
    {
        $products->delete();
        return back()->with('delete','Deleted Successfully');
    }
    function products_add_edit_data(ProductsModel $products , Request $request)
    {
        $create = 1;
        (isset($products->id) and $products->id>0)?$create=0:$create=1;
        $products->sub_categories = $request->sub_categories;
        $products->title = $request->title;
        $products->slug = $request->slug = Str::slug($request->title). '-' .  time() . '-' .  rand(100,900);
        $products->description = $request->description;
        $products->price = $request->price;
        $products->stock = $request->stock;
        $products->sku = 'product-'.rand(10000000,99999999);
        $products->slug = $request->slug;
        $products->is_discounted =  $request->is_discounted == null ? '0'  : '1';
        if($products->is_discounted == 0 ){
            $products->is_discounted = 0;
            $products->discounted_percentage = 0;
        }
        else
        {
            $products->discounted_percentage = $request->discounted_percentage == null ? '0'  : $request->discounted_percentage;
        }
        $products->is_featured =  $request->is_featured == null ? '0'  : '1';
        $products->discounted_price = $request->is_discounted == null ? '0'  : $request->price-($request->price*$request->discounted_percentage/100);

        $products->has_variations = '0';
        $products->status = $request->status;
        $products->save();
            /***saving multiple image file */
            if($request->hasFile('images'))
            {
                /***for deleting old images*/
                $getimage = ProductImageModel::where('product_id',$products->id)->get();
                    foreach($getimage as $imageget){
                        $imageget->delete();
                    }
                /***for uploading new images*/
                foreach ($request->images as $image)
                {
                    $imageName = time().'.'.$image->getClientOriginalExtension();
                    $image->move(public_path('/uploads/products'), $imageName);
                    /** Store a new images for products */
                    $storeImage = new ProductImageModel();
                    $storeImage->title          = $imageName;
                    $storeImage->product_id     = $products->id;
                    $storeImage->save();
                }
            }
            if($create == 0)
            {
                return back()->with('update','Updated Successfully');
            }
            else
            {
                return back()->with('success','Added Successfully');
            }
    }
}
