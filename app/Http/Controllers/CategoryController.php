<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($category)
    {
        //dd($category);
        $posts_category = app(Category::class);
        $posts = DB::table('posts')
            ->where('category_id', $category)
            ->get();
        $category_id = $posts->first()->category_id;
        //dd($category_id);
        $title = $posts_category->getCategoryTitle($category)[0];
        $categories = Category::all();
        return view('category.show', [
            //'posts' => $posts_category->getCategoryItemById($category),
            'posts' => $posts,
            'categories' => $categories,
            'category_id' => $category_id,
            'title' => $title,
        ]);
    }

//    public function show($category, $post)
//    {
//
//    }
}
