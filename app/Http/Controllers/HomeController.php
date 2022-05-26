<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\City;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index', [
            'cities' => City::all(),
            'categories_12' => Category::orderBy('id')->take(12)->get(),
            'posts' => Post::all(),
            'cheap_posts' => Post::orderBy('price')->take(6)->get()
        ]);
    }
}
