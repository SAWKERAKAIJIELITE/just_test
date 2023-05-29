<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Comments extends Model
{
    use HasFactory;
    protected $fillable=[
        'likes_counts', 'dislikes_counts','commenter_id','post_id','content','reports_number' ];

        public function User(): BelongsTo
        {
            return $this->belongsTo(User::class, 'commenter_id');
        }
        public function Post(): BelongsTo
        {
            return $this->belongsTo(Post::class, 'post_id');
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
