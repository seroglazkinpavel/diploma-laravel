<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categories\Create;
use App\Http\Requests\Admin\Categories\Edit;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
// use Illuminate\View\View;
use Illuminate\Contracts\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //$categoryList = Category::all();
        //dd($categoryList);
        return view('admin.categories.index', [
//            'categoryList' => Category::query()
            'categoriesList' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a category resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Create $request)
    {
        //$data = $request->only(['title', 'description', 'image']);
        $category = new Category($request->validated());

        if ($category->save()) {
            return redirect()->route('categories.index')->with('success', 'Запись успешно сохранена');
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
    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Edit $request, Category $category)
    {
        //dd($request->validated());
        //$data = $request->only(['title', 'description', 'image']);
        $category->fill($request->validated());

        if ($category->save()) {
            return redirect()->route('categories.index')->with('success', 'Запись успешно сохранена');
        }
        return back()->with('error', 'Не удалось обновить запись запись');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category):JsonResponse
    {
        try{
            $category->delete();
            return response()->json('ok');
        } catch (\Exception $e) {
            \log::error($e->getMessage(), $e->getTrace());
            return response()->json('error', 400);
        }
    }
}
