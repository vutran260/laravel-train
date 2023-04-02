<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $title = 'Products from ashan';
        $x = 1;
        $y = 2;
        // return view('products.index', compact('title', 'x', 'y'));
        $name = 'Son';
        // return view('products.index')->with('name', $name);
        $myPhone = [
            'name' => 'iPhone 14',
            'year' => 2022,
            'isFavorated' => true
        ];
        // return view('products.index', compact('myPhone'));
        // return view('products.index', [
        //     'myPhone' => $myPhone
        // ]);

        print_r(route('products'));
        return view('products.index');
    }

    public function detail($productName, $id){
        return "Product's name = ".$productName.
                "<br/>Product's ID = ".$id;

    //     $phones = [
    //         'iphone 15' => 'iphone 15',
    //         'samsung'   => 'samsung'
    //     ];
    //     return view('products.index', [
    //         'product' => $phones[$productName] ?? 'unknown product',
        // ]);

    }

    public function about() {
        return 'This is About page';
    }
};
