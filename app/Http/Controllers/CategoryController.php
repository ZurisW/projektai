<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\City;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index(Request $request){

        // return view('categories.index', [
        //     'cities' => City::all(),
        //     'categories' => Category::all(),
        //     'posts' => Post::orderBy('id')->paginate(30)
        // ]);
    }

    public function show($id)
    {
        return view('categories.show', [
            'cities' => City::all(),
            'categories' => Category::all(),
            'posts' => Post::where('category_id', $id)->paginate(40),
            'name' => Category::all()->get($id-1)->name
        ]);
    }

    public function edit($id)
    {
        //Log::channel('stderr')->debug($id);

    }

    public function update(Request $request, $id)
    {
        // 9.11

    }
}

?>
