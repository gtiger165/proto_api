<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Http\Controllers\Controller;

use DB;

class ProductController extends Controller
{
    //
    public function createProduct(Request $request){
        $product = Products::create($request->all());
        return response()->json($product);
    }

    public function updateProduct(Request $request, $id){
        $product = DB::table('products')->where('pid', $id)->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description')
        ]);
        // $product->name = $request->input('name');
        // $product->price = $request->input('price');
        // $product->description = $request->input('description');
        // $product->save();
        $response["products"] = $product;
        $response["success"] = 1;

        return response()->json($response);
    }

    public function deleteProduct($id){
        $product = DB::table('products')->where('pid', $id)->delete();
        return response()-> json('Removed successfully.');
    }

    public function index(){
        $products = Products::all();
        $response["products"] = $products;
        $response["success"] = 1;
        
        return response()->json($response);
    }
}
