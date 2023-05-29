<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Favorite_Posts extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'user_id',

    ];
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function Post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
