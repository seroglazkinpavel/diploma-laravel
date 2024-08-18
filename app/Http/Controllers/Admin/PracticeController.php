<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Practices\Create;
use App\Http\Requests\Admin\Practices\Edit;
use App\Models\Practice;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        dd(Practice::query()
//            ->with('post')
//            ->get());
        return view('admin.practices.index', [
            'practices' => Practice::query()
                ->with('post')
                ->get()
            //'categories' => Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.practices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Create $request)
    {
        $practices = new Practice($request->validated());

        if ($practices->save()) {
            return redirect()->route('practices.index')->with('success', 'Запись успешно сохранена');
        }
        return back()->with('error', 'Не удалось добавить запись');
    }

    /**
     * Display the specified resource.
     */
    public function show(Practice $practice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Practice $practice)
    {
        //$categories = Category::all();
        return view('admin.practices.edit', [
            //'categories' => Category::all(),
            'practice' => $practice,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Edit $request, Practice $practice)
    {
        //dd($_REQUEST);
        $practice = $practice->fill($request->validated());  //fill-заполнять
        if ($practice->save()) {
            return redirect()->route('practices.index')->with('success', 'Запись успешно сохранена');
        }
        return back()->with('error', 'Не удалось обновить запись');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Practice $practice)
    {
        //
    }
}
