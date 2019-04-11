<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $needle = \Request::get('search');
        $products = Product::where('name','like','%'.$needle.'%')
                    ->orderBy('id')
                    ->paginate(5);
        //$products = DB::table('products')->paginate(5);

        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $request->validate([
            'name'=>'required',
            'type'=>'required',
            'price'=>'required',
            'barcode'=>'required'
        ]);

        $product = new Product([
            'name' => $request->get('name'),
            'type' => $request->get('type'),
            'price' => $request->get('price'),
            'barcode' => $request->get('barcode'),
        ]);
        $product->save();
        return redirect('/products')->with('success','Product Created');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return view('products.edit',compact('product'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'type'=>'required',
            'price'=>['required', 'gt:0'],
            'barcode'=>'required'
        ]);

        $product = Product::find($id);
        $product->name =  $request->get('name');
        $product->type =  $request->get('type');
        $product->price =  $request->get('price');
        $product->barcode =  $request->get('barcode');
        
        $product->save();

        return redirect('/products')->with('success', 'Product updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect("/products")->with('success','Product deleted.');
    }
}
