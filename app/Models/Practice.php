<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class Practice extends Model
{
    use HasFactory, Searchable;

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

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        //$array = $this->toArray();

        return [
            'posts_id' => $this->posts_id,
            'homework' => $this->homework,

        ];
    }
}
