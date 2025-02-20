<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Define an array of anime products
        $products = [
            [
                'name' => 'Naruto Figure',
                'price' => 29.99,
                'description' => 'High-quality Naruto action figure.'
            ],
            [
                'name' => 'Attack on Titan Manga',
                'price' => 19.99,
                'description' => 'Volume 1 of the Attack on Titan manga series.'
            ],
            [
                'name' => 'One Piece Poster',
                'price' => 9.99,
                'description' => 'Official One Piece poster.'
            ],
            [
                'name' => 'My Hero Academia T-Shirt',
                'price' => 24.99,
                'description' => 'Comfortable T-shirt with My Hero Academia print.'
            ],
        ];

        // Return a view called 'products' and pass the products array to it
        return view('products', ['products' => $products]);
    }
}