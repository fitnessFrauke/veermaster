<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function openCreateContext() {
        $productController = new ProductController;
        $restaurantController = new RestaurantController;

        $products = $productController->getAllProductItems();
        $restaurants = $restaurantController->getAllRestaurantItems();

        return view('start', ['products' => $products, 'restaurants' => $restaurants]);
    }
}
