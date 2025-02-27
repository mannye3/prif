<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Entity;
use App\Models\Product;
use App\Models\Category;
use App\Models\Regulation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index(Request $request)
    {


        $data = Product::all();



        return view('products.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('products.add_product');
    }



    public function store(Request $request)
    {


        $slug = Str::slug($request->name);
        $new_product = new Product();
        $new_product->name = $request['name'];
        $new_product->price = $request['price'];
        $new_product->ProductDescription = $request['ProductDescription'];
        $new_product->slug = $slug;


        $new_product->save();
        $id =  $new_product->id;



        if ($request->hasFile('ProductPicture') && $request->file('ProductPicture')->isValid()) {
            $new_product_pic = Product::find($id);
            $ProductPicture = $request->file('ProductPicture');
            $name = Str::slug($request->name) . '.' . $ProductPicture->getClientOriginalExtension();
            $destinationPath = public_path('products');
            $ProductPicture->move($destinationPath, time() . '-' . $name);
            $db_file = time() . '-' . $name;

            $new_product_pic->ProductPicture = $db_file;
            $new_product_pic->save();
        }



        return Redirect::to('products')->with('success', 'Product added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit_product($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return view('products.edit_product', compact('product'));
    }



    public function product_update(Request $request, $id)
    {
        $slug = Str::slug($request->name);
        $update_product = Product::find($id);
        $update_product->name = $request['name'];
        $update_product->price = $request['price'];
        $update_product->ProductDescription = $request['ProductDescription'];
        $update_product->slug = $slug;

        $update_product->save();





        if ($request->hasFile('ProductPicture') && $request->file('ProductPicture')->isValid()) {
            $update_product_pic = Product::find($id);
            $ProductPicture = $request->file('ProductPicture');
            $name = Str::slug($request->name) . '.' . $ProductPicture->getClientOriginalExtension();
            $destinationPath = public_path('products');
            $ProductPicture->move($destinationPath, time() . '-' . $name);
            $db_file = time() . '-' . $name;

            $update_product_pic->ProductPicture = $db_file;
            $update_product_pic->save();
        }

        return Redirect::to('products')->with('success', 'Product updated successfully.');

        //return redirect()->back()->with('success', 'regulation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();

        return redirect()->back()->with('success', 'Product deleted successfully.');
    }
}
