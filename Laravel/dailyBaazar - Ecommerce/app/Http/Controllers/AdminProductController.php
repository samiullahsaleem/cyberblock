<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductImages;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('admin.product.products', compact('products'));
    }

    public function select($slug)
    {
        $product = Product::where('slug',$slug)->first();
        return view('admin.product.update-product', compact('product'));
    }

    public function destroy($slug)
    {
        $product = Product::where('slug',$slug)->value('id');

        Product::where('slug',$slug)->delete();
        ProductImages::where('product_id',$product)->delete();
        
        return redirect('/products');
    }

    public function update(Request $request, $slug)
    {
        $product = Product::where('slug',$slug)->value('id');

        //Main Image Upload  
        $name = time().$request->image->getClientOriginalName();
        $image= $request->image->move(public_path().'/img/product-img/main/', $name);
        
        //Product
        Product::where('slug',$slug)->update([
            "name" => $request->name,
            "description" => $request->description,
            "slug" => Str::slug($request->name),
            "category_id" => $request->category_id,
            "subcategory_id" => $request->subcategory_id,
            "price" => $request->price,
            "discounted_price" => $request->dprice,
            "stock" => $request->stock,
            "is_featured" => $request->is_featured,
            "in_sale" => $request->in_sale,
            "photo" => $name
        ]);

        //Image#1 Upload  
        $name1 = time().$request->image1->getClientOriginalName();
        $image1= $request->image1->move(public_path().'/img/product-img/image1/', $name1); 

        //Image#2 Upload  
        $name2 = time().$request->image2->getClientOriginalName();
        $image2= $request->image2->move(public_path().'/img/product-img/image2/', $name2); 

        //Image#3 Upload  
        $name3 = time().$request->image3->getClientOriginalName();
        $image3= $request->image3->move(public_path().'/img/product-img/image3/', $name3);

        //ProductImages
        $product_images = ProductImages::where('product_id',$product)->update([
            "image_1" => $name1,
            "image_2" => $name2,
            "image_3" => $name3
        ]);

        return redirect('/products');
        
    }

    public function create(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->slug = Str::slug($request->name);
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->price = $request->price;
        $product->discounted_price = $request->dprice;
        $product->stock = $request->stock;
        $product->is_featured = $request->is_featured;
        $product->in_sale = $request->in_sale;

        //Main Image Upload  
        $name = time().$request->image->getClientOriginalName();
        $image= $request->image->move(public_path().'/img/product-img/main/', $name); 
        $product->photo = $name;
        $product->save();

        $recentProduct = Product::orderBy('id', 'DESC')->first();
        
        //Product Images
        $product_images = new ProductImages;
        $product_images->product_id = $recentProduct['id'];

        //Image#1 Upload  
        $name1 = time().$request->image1->getClientOriginalName();
        $image1= $request->image1->move(public_path().'/img/product-img/image1/', $name1); 
        $product_images->image_1 = $name1;

        //Image#2 Upload  
        $name2 = time().$request->image2->getClientOriginalName();
        $image2= $request->image2->move(public_path().'/img/product-img/image2/', $name2); 
        $product_images->image_2 = $name2;

        //Image#3 Upload  
        $name3 = time().$request->image3->getClientOriginalName();
        $image3= $request->image3->move(public_path().'/img/product-img/image3/', $name3); 
        $product_images->image_3 = $name3;
        $product_images->save();

        return redirect('/products');
    }


}
