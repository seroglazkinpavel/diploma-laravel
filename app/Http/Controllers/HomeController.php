<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Plan;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index(): VIew
    {
//        $post = app(Post::class);
//        $category = app(Category::class);
//
//        return view('home.index', [
//            'posts' => $post->getAll(),
//            'categories' => $category->getCategoryAll(),
//        ]);
        //dd(Plan::all());
        return view('home.index', [
            'plans' => Plan::all(),
            'posts' => Post::inRandomOrder()->limit(8)->get(),
            'categories' => Category::all(),
        ]);
    }

    public function show($post)
    {
        $lesson = Post::find($post);
        $practice = DB::table('practice')->where('posts_id', $post)->first();
        $category_id = $lesson->getAttribute('category_id');
        $posts = DB::table('posts')
            ->where('category_id', $category_id)
            //->simplePaginate(7);
            ->get();
        $plans = DB::table('plans')
            ->where('posts_id', $post)
            ->get();
        //dd($plans);
        $title = app(Category::class)->getCategoryTitle($category_id)[0];

        $comments = app(Comment::class);

        return view('home.show', [
            'lesson' => $lesson,
            'plans' => $plans,
            'category_id' => $category_id,
            'posts' => $posts,
            'practice' => $practice,
            'title' => $title,
            'categories' => Category::all(),
            'comments' => $comments->getPostItemById($post),
        ]);
    }

    public function comment(Post $post, Request $request)
    {
        //$data = $request->validata();
        $data = $request->only(['post_id', 'message']);
        $data['user_id'] = auth()->user()->id;
        $data['post_id'] = $post->id;
        Comment::create($data);
        return redirect()->route('home.show', $post->id);
    }

    public function like()
    {
        return view('home.like');
    }
}
