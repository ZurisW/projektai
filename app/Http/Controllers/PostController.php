<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\City;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index(){

        return view('posts.index', [
            'posts' => Post::orderBy('id')->pagination(30)
        ]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        if( $post->user->contacts->isEmpty() ){
            $phone = "-";
            $email = $post->user->email;
        }
        else{
            $phone = $post->user->contacts->first()->phone;
            $email = $post->user->contacts->first()->email;

        }

        return view('posts.show', [
            'cities' => City::all(),
            'post' => Post::findOrFail($id),
            'phone' => $phone,
            'email' => $email,
            'name' => Category::find($post->category->id)->name
        ]);
    }

    public function create()
    {
        $date = date('Y-m-d');

        return view('posts.create', [
            'cities' => City::all(),
            'categories' => Category::all(),
            'date' => $date
        ]);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', [
            'cities' => City::all(),
            'categories' => Category::all(),
            'post' => $post,
            'name' => Category::find($post->category->id)->name
        ]);
    }

    public function store(StorePostRequest $request)
    {
        $input = $request->all();
        Post::create($input);

        return redirect()->route('index')->with('success', 'Post created!');
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $input = $request->all();
        $post->update($input);
        return redirect()->route('index')->with('success', 'Post edited!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('index')->with('success', 'Post deleted!');
    }
}

?>
