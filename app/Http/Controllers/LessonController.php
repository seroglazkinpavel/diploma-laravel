<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function internship(Request $request): View
    {
        $practices = Practice::search($request->search ?? '')->get();
        dd($practices);
        //dd(Practice::query()->with('post')->get());
        return view('search.internship', [
            'practices' => $practices,
            'title' => Practice::query()->with('post')->get('title'),
        ]);
    }
}
