<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'title',
        'description',
        'information',
        'image',
    ];

    public function getCategoryItemById($category): mixed
    {
        return DB::table('posts')
            ->join('categories', 'categories.id', '=', 'posts.category_id')
            ->where('posts.category_id', '=', $category)
            ->select('posts.*', 'categories.title as categoryTitle')
            ->get();
    }

    public function getCategoryTitle($category): mixed
    {
        return DB::table('categories')
            ->where(['id' => $category])
            ->get('title');
    }

    public function post(): HasMany
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}
