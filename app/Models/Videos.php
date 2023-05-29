<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Videos extends Model
{
    use HasFactory;
    protected $fillable = [
        'video_name',
        'post_id',

    ];
    /**
     * Get the Post that owns the Photos
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
