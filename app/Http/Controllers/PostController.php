<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\City;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index(Request $request){

        return view('categories.index', [
            'posts' => Post::orderBy('id')->pagination(30)
        ]);
    }

    public function show($id)
    {

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
