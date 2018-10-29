<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
       $posts = Post::simplePaginate(1);
       return view('index', ['posts' => $posts]);
   }


    public function show($slug){
        $pst = Post:: findBySlug($slug);
        return view('post.show', ['post' => $pst]);
    }

}
