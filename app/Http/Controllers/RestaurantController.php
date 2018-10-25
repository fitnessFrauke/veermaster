<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function getAll() {
        $restaurants = \App\Restaurant::all();
        return view('restaurants', ['restaurants' => $restaurants]);
    }

    public function getAllRestaurantItems() {
        return \App\Restaurant::all();
    }

    public function delete($id) {
        DB::delete('delete from restaurants where id = ?', [$id]);
        return redirect()->action('RestaurantController@getAll');
    }

    public function create(Request $request) {
        $data = $request->validate([
            'title' => 'required|max:255',
        ]);
    
        //$product = tap(new App\Product($data))->save();
        $restaurant = new \App\Restaurant;
        $restaurant->title = $data['title'];
    
        $restaurant->save();
    
        return redirect()->action('RestaurantController@getAll');
    }

    public function update($id, Request $request) {
        $restaurant = \App\Restaurant::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|max:255'
        ]);

        $input = $request->all();
        $restaurant->fill($input)->save();
        return redirect()->action('RestaurantController@getAll');
    }
    
}
