<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\News\Create;
use App\Http\Requests\Admin\News\Edit;
use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

//use Illuminate\Validation\Rules\Enum;
//use Illuminate\Validation\Rule;
//use Predis\Response\Status;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        //dd(Post::query()->with('category'));
        return view('admin.news.index', [
//            'newsList' => Post::all(),
            'newsList' => Post::query()
                ->status()
                ->with('category')  //дай мне  новости с категории
               //->simplePaginate(),
                ->paginate(7),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.news.create', [
            'categories' => Category::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Create $request)
    {
        $news = new Post($request->validated());

        if ($news->save()) {
            return redirect()->route('news.index')->with('success', 'Запись успешно сохранена');
        }
        return back()->with('error', 'Не удалось добавить запись');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json($this->getNews(), 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //$categories = Category::all();
        return view('admin.news.edit', [
            'categories' => Category::all(),
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Edit $request, Post $post)
    {
        $post = $post->fill($request->validated());  //fill-заполнять
        if ($post->save()) {
            return redirect()->route('news.index')->with('success', 'Запись успешно сохранена');
        }
        return back()->with('error', 'Не удалось обновить запись');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post):JsonResponse
    {
        try{
            $post->delete();
            return response()->json('ok');
        } catch (\Exception $e) {
            \log::error($e->getMessage(), $e->getTrace());
            return response()->json('error', 400);
        }
    }
}
