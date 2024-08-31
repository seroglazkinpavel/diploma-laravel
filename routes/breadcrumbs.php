<?php

use App\Models\Category;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Request;

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});
// Home > About
Breadcrumbs::for('about', function ($trail) {
    $trail->parent('home');
    $trail->push('About', route('about'));
});
// Home > Blog

Breadcrumbs::for('reviews', function ($trail) {
    $trail->parent('home');
    $trail->push('Отзывы', route('reviews'));
});
Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('home');
    $trail->push('Контакты', route('feedback.index'));
});
// Home > [Category]
//Breadcrumbs::for('category.show', function ($breadcrumbs, $category) {
//    $breadcrumbs->parent('home');
//    $breadcrumbs->push($category, url('category/{category}'));
//});
Breadcrumbs::for('category.show', function ($trail, $category) {
    //dd($category);
    //dd($category->first()->title);
    //$category = app(Category::class)->getCategoryTitle($category)[0]->title;
    //dd($category[0]->title);
    $trail->parent('home');
    //$trail->push($category, url('category/{category}'));
    $trail->push($category->getAttribute('title'), route('category.show', $category->getAttribute('id')));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('home.show', function ($trail, $cat, $lesson) {
    //dd(gettype($category->getAttribute('title')));
    //dd($post->category->getAttribute('title'));
    //dd($post->category->getAttribute('title'));
    //dd($post->category->where('id', $post->category_id)->value('title'));
    //dd($post->category->getCategoryItemById($post->category_id)[0]->categoryTitle);
    //dd($lesson);
    $trail->parent('category.show', $cat);
//    $trail->push($post->title, route('home.show', ['title', $post->title]));
    $trail->push($lesson->title, route('home.show', $lesson->id));
});

// Home > [Category] > [Post] > [Practice]
Breadcrumbs::for('practice.show', function ($trail, $cat, $post, $title_lesson) {

    $trail->parent('home.show', $cat, $post);
    $trail->push($title_lesson, route('practice.show', $post->id));
});
