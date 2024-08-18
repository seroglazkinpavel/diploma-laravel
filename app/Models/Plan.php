<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'posts_id',
        'title',
    ];

    // Обратная связь
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'posts_id');
    }
}
