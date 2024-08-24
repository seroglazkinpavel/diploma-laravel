<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'informations';
    protected $guarded = false;

    public function getPostItemById(int $id): mixed
    {
        return DB::table('informations')
            ->join('posts', 'posts.id', '=', 'informations.post_id')
            ->join('users', 'users.id', '=', 'informations.user_id')
            //->where('users.name')
            ->where('informations.post_id', '=', $id)
            //->select('users.name')
            ->get();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

    public function getDateAsCarbonAttribute()
    {
        return Carbon::parse($this->created_at);
    }
}
