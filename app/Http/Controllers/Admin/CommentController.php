<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Comment\Create;
use App\Http\Requests\Admin\Comment\Edit;
use App\Models\Post;
use App\Models\User;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $comments = DB::table('comments')
            ->join('posts', 'posts.id', '=', 'comments.post_id')
            ->join('categories', 'categories.id', '=', 'posts.category_id')
            ->join('users', 'users.id', '=', 'comments.user_id')
            ->select('comments.*', 'posts.title', 'users.name', 'categories.title as categoryTitle')
            ->get();
//        dd($comments);
        return view('admin.comments.index', [
            'comments' => $comments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comments.create', [
            'users' => User::all(),
            'posts' => Post::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Create $request)
    {
        $comments = new Comment($request->validated());

        if ($comments->save()) {
            return redirect()->route('comment.index')->with('success', 'Запись успешно сохранена');
        }
        return back()->with('error', 'Не удалось добавить запись');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('admin.comments.edit', [
            'users' => User::all(),
            'posts' => Post::all(),
            'comment' => $comment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Edit $request, Comment $comment)
    {
        $comment = $comment->fill($request->validated());

        if ($comment->save()) {
            return redirect()->route('comment.index')->with('success', 'Запись успешно сохранена');
        }
        return back()->with('error', 'Не удалось обновить запись');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment):JsonResponse
    {
        try{
            $comment->delete();
            return response()->json('ok');
        } catch (\Exception $e) {
            \log::error($e->getMessage(), $e->getTrace());
            return response()->json('error', 400);
        }
    }
}
