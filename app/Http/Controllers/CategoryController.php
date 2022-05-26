<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index(Request $request){

        return view('index', [
            'categories' => Category::all(),
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
