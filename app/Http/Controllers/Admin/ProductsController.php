<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Category;
use App\Products;

class ProductsController extends Controller
{
     public function __construct()
            {
                $this->middleware('auth');
            }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $arr['products']=Products::all();
        return view('admin.products.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Products $products)
    {
        if ($request->image->getClientOriginalName()) {
            $ext = $request->image->getClientOriginalExtension();
            $file = date("YmdHis").rand(1,99999).'.'.$ext;
            $request->image->storeAs('public/productImage', $file);
        }
        else{
            $file = '';
        }
        $products->image = $file;
         $products->name = $request->name;
         $products->description=$request->description;
         $products->price=$request->price;
         $products->save();
         return redirect()->route("admin.products.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        $arr['products'] = Products::all();
        return view('admin.products.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        if (isset($request->image ) && $request->image->getClientOriginalName()) 
        {
            $ext = $request->image->getClientOriginalExtension();
            $file = date("YmdHis").rand(1,99999).'.'.$ext;
            $request->image->storeAs('public/productImage', $file);
        }
        else
        {
            if(!$products->image)
            {

                $file = '';
            }
            else
            {
                $file = $products->image;
            }

        }
             $products->image = $file;
             $products->name = $request->name;
             $products->description = $request->description;
             $products->price = $request->price;
             $products->save();
             return redirect()->route("admin.products.index");
        }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Products $products)
    {
        $products->image = $file;
        $products->name=$request->name;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->status="droped";
        $products->save();
        return redirect()->route("admin.products.index");  
    }
}


