<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'dislikes_counts',
        'likes_counts',
        'location',
        'type',
'Content','title','reports_number'
    ];
    public function User():BelongsTo
    {
        return $this->belongsTo(User::class,  'user_id');
    }
    public function location()
    {
        return $this->morphTo();
    }
    public function Photos(): HasMany
    {
        return $this->hasMany(Photos::class, 'post_id');
    }
    public function Videos(): HasMany
    {
        return $this->hasMany(Videos::class, 'post_id');
    }
    public function Favorite_Posts(): HasMany
    {
        return $this->hasMany(Favorite_Posts::class, 'post_id', );
    }
    public function Comments(): HasMany
    {
        return $this->hasMany(Comments::class, 'post_id', );
    }
    public function reports()
    {
        return $this->morphMany(Reports::class, 'type');
    }
    public function reactions()
    {
        return $this->morphMany(Reactions::class, 'location');
    }
}
