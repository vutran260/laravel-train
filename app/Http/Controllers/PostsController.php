<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //
    public function index() {
        // Query builders
        // $posts = DB::select("SELECT * FROM posts WHERE id = :id;",
        // [
        //     'id' => 3,
        // ]);

        // $posts = DB::table("posts")
        //     ->where('id', '=', 4)
        //     ->delete();
        // dd($posts);
        
            // ->where('id', '=', 1)
            // ->update([
            //     'title' => 'changed by shan',
            //     'body'  => 'body da duoc update 2'
            // ]);

            // -> insert([
            //     "title" => "OKE haha",
            //     "body"  => "A new post ne"
            // ]);
            // ->avg('id');
            // ->sum('id');
            // ->count();
            // -> find(3);
            // ->whereNotNull("body")
            // ->oldest()->get();
            // ->first();
            // ->latest();
            // ->get();
            // ->get();
            // ->where("created_at", ">", now()->subDay())
            // ->orwhere("id",">", 3)
            // ->whereBetween("id", [1,3])
            // ->orderBy("id", "desc") // Sap xep theo thu tu giam dan
            // ->orderBy("id", "asc") // Sap xep theo thu tu tang dan
            // ->select("body")
        

        return view('posts.index');
    }
}
