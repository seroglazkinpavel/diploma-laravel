<?php

namespace App\Models;

use App\Enums\Posts\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'category_id',
        'title',
        'author',
        'status',
        'image',
        'description',
    ];

    /**
     * casts define as Property
     */
//    protected $casts = [
//        'status' => Status::class
//    ];
//
//    /**
//     * casts define as method (Right way in Laravel 11)
//     */
//    protected function casts(): array
//    {
//        return [
//            'status' => Status::class,
//        ];
//    }

    public function scopeStatus(Builder $query): Builder
    {
        if (request()->has('f')) {
            return $query->where('status', request()->query('f', 'draft'));
        }
        return $query;
    }

//    protected $table = 'posts';
//
//    public function getAll(): Collection
//    {
//        return DB::table($this->table)->get();
//    }
//
//    public function getItemById(int $id): mixed
//    {
//        return DB::table($this->table)->find($id);
//    }

    // Обратная связь
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        //$array = $this->toArray();

        return [
            'title' => $this->title,
            'author' => $this->author
            ];
    }

    public function plan(): HasMany
    {
        return $this->hasMany(Plan::class, 'posts_id');
    }

    public function practice(): HasMany
    {
        return $this->hasMany(Practice::class, 'posts_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
