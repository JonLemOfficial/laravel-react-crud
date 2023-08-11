<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * 
     * */
    public function index()
    {
        $products = [
            [ "id" => 1, "name" => "Smart TV", "price" => 150, "inStock" => true, "quantity" => 12 ],
            [ "id" => 2, "name" => "Telefono", "price" => 80,  "inStock" => true, "quantity" => 15 ],
            [ "id" => 3, "name" => "Repuesto", "price" => 190, "inStock" => false, "quantity" => 5 ]
        ];

        return view("products", [ "products" => $products ]);
    } 

}
