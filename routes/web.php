<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SearchController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\PlanController as AdminPlanController;
use App\Http\Controllers\Admin\PracticeController as AdminPracticeController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['categories' => Category::all(), 'user' => Auth::user()]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('home/{post}', [HomeController::class, 'show'])->name('home.show');
Route::post('home/{post}/comment', [HomeController::class, 'comment'])->name('home.comment');
Route::post('home/{post}/estimation', [HomeController::class, 'estimation'])->name('home.estimation');

Route::get('category/{category}', [CategoryController::class, 'show'])->name('category.show');

//Route::get('menu/contacts', [MenuController::class, 'index'])->name('menu.contact');
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::post('/feedback', [FeedbackController::class, 'send'])->name('feedback.send');

Route::get('search', [SearchController::class, 'index'])->name('search');
Route::get('internship', [LessonController::class, 'internship'])->name('internship');

Route::get('practice/{post}', [PracticeController::class, 'show'])->name('practice.show');
Route::post('practice/{post}/estimation', [PracticeController::class, 'estimation'])->name('practice.estimation');

Route::get('reviews', [ReviewController::class, 'index'])->name('reviews');
Route::post('reviews/store', [ReviewController::class, 'store'])
    ->name('reviews.store');

//Route::group(['prefix' => 'admin', 'as' => 'admin.'], static function () {
//    Route::get('/categories', [AdminCategoryController::class, 'index'])
//        ->name('categories.index');
//    Route::get('/news', [AdminNewsController::class, 'index'])
//        ->name('news.index');
//    Route::get('/', AdminController::class)->name('index');
//    Route::get('/news/create', [AdminNewsController::class, 'create'])
//        ->name('news.create');
//    Route::post('/news/store', [AdminNewsController::class, 'store'])
//        ->name('news.store');
//    Route::get('/news/{post}/edit', [AdminNewsController::class, 'edit'])
//        ->name('news.edit');
//    Route::put('/news/{post}/update', [AdminNewsController::class, 'update'])
//        ->name('news.update');
//    Route::delete('news/{news}', [AdminNewsController::class, 'destroy'])->name('news.destroy');
//    Route::get('/news/{id}', [AdminNewsController::class, 'show']);
//});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/categories', [AdminCategoryController::class, 'index'])
        ->name('categories.index');
    Route::get('/categories/create', [AdminCategoryController::class, 'create'])
        ->name('categories.create');
    Route::post('/categories/store', [AdminCategoryController::class, 'store'])
        ->name('categories.store');
    Route::get('/categories/{category}/edit', [AdminCategoryController::class, 'edit'])
        ->name('categories.edit');
    Route::put('/categories/{category}/update', [AdminCategoryController::class, 'update'])
        ->name('categories.update');
    Route::delete('categories/{category}', [AdminCategoryController::class, 'destroy'])->name('categories.destroy');

    Route::get('/plans', [AdminPlanController::class, 'index'])
        ->name('plans.index');
    Route::get('/plans/create', [AdminPlanController::class, 'create'])
        ->name('plans.create');
    Route::post('/plans/store', [AdminPlanController::class, 'store'])
        ->name('plans.store');
    Route::get('/plans/{plan}/edit', [AdminPlanController::class, 'edit'])
        ->name('plans.edit');
    Route::put('/plans/{plan}/update', [AdminPlanController::class, 'update'])
        ->name('plans.update');
    Route::delete('plans/{plan}', [AdminPlanController::class, 'destroy'])->name('plans.destroy');

    Route::get('/practices', [AdminPracticeController::class, 'index'])
        ->name('practices.index');
    Route::get('/practices/create', [AdminPracticeController::class, 'create'])
        ->name('practices.create');
    Route::post('/practices/store', [AdminPracticeController::class, 'store'])
        ->name('practices.store');
    Route::get('/practices/{practice}/edit', [AdminPracticeController::class, 'edit'])
        ->name('practices.edit');
    Route::put('/practices/{practice}/update', [AdminPracticeController::class, 'update'])
        ->name('practices.update');
    Route::put('/test', [AdminPracticeController::class, 'test'])
        ->name('test.test');

    Route::get('/news', [AdminNewsController::class, 'index'])
        ->name('news.index');
    Route::get('/', AdminController::class)->name('index');
    Route::get('/news/create', [AdminNewsController::class, 'create'])
        ->name('news.create');
    Route::post('/news/store', [AdminNewsController::class, 'store'])
        ->name('news.store');
    Route::get('/news/{post}/edit', [AdminNewsController::class, 'edit'])
        ->name('news.edit');
    Route::put('/news/{post}/update', [AdminNewsController::class, 'update'])
        ->name('news.update');
    Route::delete('news/{post}', [AdminNewsController::class, 'destroy'])->name('news.destroy');
    //Route::get('/news/{id}', [AdminNewsController::class, 'show']);
});

Route::post('/logout', [loginController::class, 'destroy'])->middleware('auth')->name('logout');
