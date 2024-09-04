<?php

namespace App\Http\Controllers;

use App\Http\Requests\Estimation\Create;
use App\Models\Category;
use App\Models\Estimation;
use App\Models\Post;
use App\Models\Practice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PracticeController extends Controller
{
    public function show($post)
    {
        $practices = DB::table('practice')
            ->where('posts_id', $post)
            ->get();
        $practice = DB::table('practice')->where('posts_id', $post)->first();
        $lesson = Post::find($post);
        $title_lesson = $lesson->title;

        $category_id = $lesson->getAttribute('category_id');
        $posts = DB::table('posts')
            ->where('category_id', $category_id)
            ->get();
        $title = app(Category::class)->getCategoryTitle($category_id)[0];

        return view('practice.show', [
            'practices' => $practices,
            'practice' => $practice,
            'category_id' => $category_id,
            'title_lesson' => $title_lesson,
            'posts' => $posts,
            'title' => $title,
            'categories' => Category::all(),
            'lesson' => $lesson,
        ]);
    }

    public function estimation(Post $post, Request $request)
    {
        // Валидация полей формы
//        $request->validate([
//            'user_id' => ['required', 'integer', 'exists:user,id'],
//            'post_id' => ['required', 'integer', 'exists:post,id'],
//            'option' => ['required', 'string'],
//            'radio' => ['required', 'string'],
//            'message' => ['nullable', 'string'],
//        ]);
        //$data = $request->only(['post_id', 'message']);
//        $validated = $request->validated();
//        dd($validated);
//        $estimation = new Estimation($validated);
//        $estimation['user_id'] = auth()->user()->id;
//        $estimation['post_id'] = $post->id;
        $data['user_id'] = auth()->user()->id;
        $data['post_id'] = $post->id;
        $data['option'] = $request->mySelect;
        $data['radio'] = $request->payment;
        $data['message'] = $request->message;
        $estimation = new Estimation($data);
        if($estimation->getAttribute('option') === null and $estimation->getAttribute('radio') === null) {
            return redirect()->route('practice.show', $post->id)->with('error', 'Не дали оценку!');
        }
//        if (Estimation::create($data)) {
//            return redirect()->route('practice.show', $post->id)->with('success', 'Запись успешно сохранена!');
//        }
        if ($estimation->save()) {
            return redirect()->route('practice.show', $post->id)->with('success', 'Запись успешно сохранена!');
        }
        return back()->with('error', 'Не удалось добавить запись.');
    }
}
