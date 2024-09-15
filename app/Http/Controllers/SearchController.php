<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Practice;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): View
    {
        $posts = Post::search($request->search ?? '')->get();

        return view('search.index', [
            'posts' => $posts,
            'categories' => Category::all(),

        ]);
    }
}
