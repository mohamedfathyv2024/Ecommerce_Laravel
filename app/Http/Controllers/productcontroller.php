<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Product;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Product::get()->toarray();
        // echo "<pre>";
        // print_r($products);
        // echo "</pre>";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "<h1 style='color:red;'>create page</h1>";
        return view("create"); // will go to view and show create.blade.php 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name=$request->name;
        Product::create(["size"=>$name]);
        echo "added";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Product::where("id",$id)->first();  // db or DB both are correct
        echo "<pre>";
        print_r($products);
        echo "</pre>";
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo "<h1 style='color:blue;'>EDIT PAGE</h1>";  // if you made return the code will stop and form will not appear 
        
        Product::where("id",$id)->first();

        return view("edit",compact("products"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        $name=$request->name;
        Product::where("id",$id)->update(["product"=>$name]);
        echo "update : $id";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)

    {
        // $name=$request->name;
        Product::where("id",$id)->first();
        echo "the product is :".$products->id;
        echo view("edit",compact("products"));
        Product::where("id",$id)->delete();
        if($products){
            echo "deleted";
        }
        
    }
}
