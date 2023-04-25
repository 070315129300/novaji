<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = Product::all();
        return view('index', compact('user'));
    }
    public function addproduct(){
        return view ('addproduct');
    }
    public function insertproduct(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $image = $request->image;
        if($image) {
            $imagename = time().'.'.$image->getClientoriginalExtension();

            $request->image->move('productimage', $imagename);
            $product->image = $imagename;
        }
        $product->save();
        return redirect()->back()->with('message', 'updated sucessfully');

    }
    public function editproduct($id){
        $user = Product::find($id);
        return view('editproduct', compact('user'));
    }
    public function updateproduct(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $image = $request->image;
        if($image) {
            $imagename = time().'.'.$image->getClientoriginalExtension();

            $request->image->move('productimage', $imagename);
            $product->image = $imagename;
        }
        $product->save();
        return redirect()->back()->with('message', 'uploaded sucessfully');

    }
    public function deleteproduct($id){
    $data = Product::find($id);
    $data->delete();
    return redirect('/')->with('success', 'product removed');


    }
}
