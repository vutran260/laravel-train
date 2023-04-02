<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }
    public function about() {
        $name = "Jack";
        // $names = array('Hoang', 'Tony', 'John', 'David');
        $names = [];
        return view('about', [
            'names' => $names,
        ]);
        // return view('about')->with('name', $name);
    }
}
