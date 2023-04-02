<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Category; // Use category
use App\Rules\Uppercase; // Use custom rule
use App\Http\Requests\CreateValidationRequest; // use custom requests
// php artisan make:request CreateValidationRequest

class FoodsController extends Controller
{
    public function index() {

        $foods = Food::all(); // SELECT * FROM foods

        //Filter:
        // $foods = Food::where('name', '=', 'Banh beo')
        //             ->get();

        // dd($foods);
        return view('foods.index', [
            'foods' => $foods,
        ]);
    }

    public function create() {
        // insert new food
        $categories = Category::all();
        return view('foods.create')->with('categories', $categories);
    }

    //public function store(CreateValidationRequest $request) {
    public function store(Request $request) {

        //dd($request->all());
        //guessExtension()); //jpg, png, ...
        // ->getMimeType() ==> vi du: "image/jpeg"
        // ->getClientOriginalName() ==> "tenfile.duoiFile"
        // ->getSize() ==> vd: 419089 (dung luong cua file)
        // ->getError() ==> vd: 0 ( show error khi upload neu co )
        // ->isValid() ==> vd: true (la upload ok)
        //dd($request->file('image')->isValid());

        $request->validate([
            'name' => 'required', 
            'count' => 'required|integer|min:0|max:200',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048', // = voi ten the image o create.blade.php
            'category_id' => 'required',
        ]);
        // client image's name and server's image name
        // must be different
        $generatedImageName = 'image'.time().'-'.$request->name
                            .'.'.$request->image->extension();
                            //dd($generatedImageName);
        // move to folder
        $request->image->move(public_path('images'), $generatedImageName);

        // dd('This is store function');
        // $food = new Food();
        // $food->name = $request->input('name');
        // $food->count = $request->input('count');
        // $food->description = $request->input('description');
        // dd($request);

        // We need validate data here
        // $request->validated(); // custom request

        // or default request
        // $request->validate([
        //     // 'name' => 'required|unique:foods',
        //     'name' => new Uppercase(),
        //     'count' => 'required|integer|min:0|max:1000',
        //     'category_id' => 'required',
        // ]);


        // if validate pass, it will come here!
        // Otherwise it will throw an exception (ValidateionException)
        $food = Food::create([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'description' => $request->input('description'),
            'image_path'  => $generatedImageName,
            'category_id' => $request->input('category_id'),
        ]);
        // save to database:
        $food->save();
        return redirect('/foods');
    }

    public function edit($id) {
        // dd($id);
        $food = Food::find($id);
        // dd($food);
        return view('foods.edit')->with('food', $food);
    }

    public function update(CreateValidationRequest $request, $id) {
        //
        $request->validated(); // custom request

        // dd($id);
        $food = Food::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'count' => $request->input('count'),
                'description' => $request->input('description'),
            ]);
        return redirect('/foods');
    }

    public function destroy($id) {
        // dd($id);
        $food = Food::find($id);
        $food->delete();
        return redirect('/foods');
    }

    public function show($id) { // like show details
        // dd('This is show function. id='.$id);
        
        $food = Food::find($id);
        // dd($food);

        $category = Category::find($food->category_id);
        // dd($category);
        $food->category = $category;
        // dd($food);

        return view('foods.show')->with('food', $food);
    }

}
