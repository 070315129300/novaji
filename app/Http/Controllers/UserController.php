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
    public function addproduct(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $image = $request->image;
        if($image) {
            $imagename = time().'.'.$image->getClientoriginalExtension();

            $request->file->move('blogimage', $imagename);
            $product->image = $imagename;
        }
        $product->save();
        return redirect()->back()->with('message', 'uploaded sucessfully');

    }
    public function updateproduct(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $image = $request->image;
        if($image) {
            $imagename = time().'.'.$image->getClientoriginalExtension();

            $request->file->move('productimage', $imagename);
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
