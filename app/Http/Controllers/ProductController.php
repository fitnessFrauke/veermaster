<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller {

    public function getAll() {
        $products = \App\Product::all();
        return view('welcome', ['products' => $products]);
    }

    public function delete($id) {
        DB::delete('delete from products where id = ?', [$id]);
        return redirect('/');
    }

    public function create(Request $request) {
        $data = $request->validate([
            'title' => 'required|max:255',
        ]);
    
        //$product = tap(new App\Product($data))->save();
        $product = new \App\Product;
        $product->title = $data['title'];
    
        $product->save();
    
        return redirect('/');
    }

    public function update($id, Request $request) {
        $product = \App\Product::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|max:255'
        ]);

        $input = $request->all();
        $product->fill($input)->save();
        return redirect('/');
    }

}