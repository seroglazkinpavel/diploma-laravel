<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Practice extends Model
{
    use HasFactory;

    protected $table = 'practice';

    protected $fillable = [
        'posts_id',
        'homework',
        'image',
    ];

    // Обратная связь
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'posts_id');
    }
}
