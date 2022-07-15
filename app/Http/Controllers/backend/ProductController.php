<?php

namespace App\Http\Controllers\backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Productrequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->get();
        // dd($products);
        return view('admin.produits.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories = Category::all();
        return view('admin.produits.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Productrequest $request)
    {
        // dd($request);
        $image = $request->file('image')->store('public/products');

         Product::create([
           'name'=> $request ->name,
           'price'=> $request->price,
            'category_id'=> $request->category_id,
            'image' => $image
         ]);

       
        return to_route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // dd($product);
        return view('admin.produits.edit',compact('product'))->with('categories',Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'=> ['required', 'string'],
            'price' =>['required'],
      ]);

      $image = $product->image;
      if ($request->hasFile('image')) {
          Storage::delete($product->image);
          $image = $request->file('image')->store('public/products');
      }

      $product->update([
          'name'=> $request ->name,
          'price'=>$request ->price,
          'image'=> $image,
          'category_id' =>$request ->category_id,
      ]);

      return to_route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Storage::delete($product->image);
        $product->delete();
        return to_route('products.index');
    }
}
