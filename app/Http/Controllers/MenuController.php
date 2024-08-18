<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(): View
    {
        return view('menu.contact', [
            'categories' => Category::all(),
        ]);
    }
}
