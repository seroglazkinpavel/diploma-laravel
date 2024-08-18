<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Plans\Create;
use App\Http\Requests\Admin\Plans\Edit;
use App\Models\Category;
use App\Models\Plan;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//        dd(Plan::query()
//            ->with('post')  //дай мне  план с поста
//            ->get());
        return view('admin.plans.index', [
            'plansList' => Plan::query()
                ->with('post')  //дай мне  план с поста
                ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //dd(Post::query()->with('category'));
        //dd(Post::query()->where('category_id', 2)->pluck('title'));
        //$cat = app(Category::class);
        //$cats = new Category();
        //$posts = $category->getCategoryItemById(2);
        //dd($posts->pluck('title'));
        //dd(Category::all());
        return view('admin.plans.create', [
            'categories' => Category::all(),
//            //'cats' => $cats,
//            'posts' => Post::query()
//                ->with('category')
            //'posts' => Post::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Create $request)
    {
        $plans = new Plan($request->validated());

        if ($plans->save()) {
            return redirect()->route('plans.index')->with('success', 'Запись успешно сохранена');
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
    public function edit(Plan $plan)
    {
        //$categories = Category::all();
        return view('admin.plans.edit', [
            'categories' => Category::all(),
            'plan' => $plan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Edit $request, Plan $plan)
    {
        $plan = $plan->fill($request->validated());  //fill-заполнять
        if ($plan->save()) {
            return redirect()->route('plans.index')->with('success', 'Запись успешно сохранена');
        }
        return back()->with('error', 'Не удалось обновить запись');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan $plan):JsonResponse
    {
        try{
            $plan->delete();
            return response()->json('ok');
        } catch (\Exception $e) {
            \log::error($e->getMessage(), $e->getTrace());
            return response()->json('error', 400);
        }
    }
}
