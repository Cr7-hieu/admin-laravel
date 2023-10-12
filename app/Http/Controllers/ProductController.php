<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $products = Product::all();
        return view('product.san-pham',compact('products'));
    }
    
    function create(){
        return view('product.create');
    }
    function setCreate(Request $request){
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);
        $data = [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'description' => $request->input('description'),
        ];
        Product::create($data);
        return redirect()->route('product.index');
    }
    function update(Request $request, $id){
        $sua = Product::find($id);
    }
    function setUpdate(Request $request, $id){
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);
        $sua = Product::find($id);
        $sua->update($request->all());
        return redirect()->route();    
    }
    function view($id){

    }
    function delete(){

    }
}
