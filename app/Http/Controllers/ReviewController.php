<?php

namespace App\Http\Controllers;

use App\Http\Requests\Menu\Reviews\Create;
use App\Models\Category;
use App\Models\Review;
use App\Services\Contracts\Upload;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(): View
    {
        $reviewList = Review::query()
            ->paginate(1);
        return view('reviews.index', [
            'categories' => Category::all(),
            'reviews' => Review::all(),
            'reviewList' => $reviewList,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Create $request, Upload $upload)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $validated['image'] = $upload->create($request->file('image'));
        }

        $reviews = new Review($validated);

        if ($reviews->save()) {
            return redirect()->route('reviews')->with('success', 'Запись успешно сохранена');
        }
        return back()->with('error', 'Не удалось добавить запись');
    }

}
