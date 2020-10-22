<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;




class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $products)
    {
        $products = Product::get();

        return view('products.index', ['products'=>$products]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $products = Product::get();

        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // if(Auth::check()){
            $product = Product::create([
                'title' => $request->input('title'),
                'description' => $request->input('description')
            ]);
            if($product){
                return redirect()->route('products.index', ['product'=> $product->id])
                ->with('product_created', 'Product has been created succesfully!');
            }
        // }
            // return back()->with('product_created', 'Product has been created succesfully!');
            
            // return back()->withInput()->with('errors', 'Error creating new product');
            // return back()->withInput()->wordwrap(str)ith('errors' , 'Error creating new product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id',$id)->first();

        return view('products.show', ['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('products.edit', ['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $product = Product::find($request->id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->save();
        
        return back()->with('product_updated', 'Product has been updated succesfully!');

        // if(Auth::check()){
        //     $productUpdate = Product::where('id', $product->id)
        //         ->update([
        //             'title' => $request->input('title'),
        //             'description' => $request->input('description'),
        //                 ]);

        //     if($productUpdate){
        //         return redirect()->route('products.index',['product'=>$product->id])->with('succes', 'Product updated succesfully');
        //     }
        //     //redirect
        //     return back()->withInput();
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id',$id)->delete();

        return redirect()->route('products.index')->with('product_deleted', 'Product has been deleted successfully!');
        // return view()->with('product_deleted', 'Product has been deleted successfully!');
    }
}