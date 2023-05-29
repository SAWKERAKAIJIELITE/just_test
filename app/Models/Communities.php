<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Communities extends Model
{
    use HasFactory;
    protected $fillable=[
'name', 'image_name','cover_image_name','subscriber_counts',
    ];
    public function Subscribe_Communities(): HasMany
    {
        return $this->hasMany(Subscribe_Communities::class, 'Community_id', );
    }
    public function posts()
    {
        return $this->morphMany(Post::class, 'location');
    }
}
