<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'type',
        'name',
        'image_name',
        'cover_image',
'bio','followers_number','email','admin_id'
    ];

    public function User():BelongsTo
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
    public function Follow_Page():HasMany
    {
        return $this->hasMany(Follow_Page::class, 'page_id');
    }
    public function invite_Page():HasMany
    {
        return $this->hasMany(Invite::class, 'page_invite_id');
    }
    public function posts()
    {
        return $this->morphMany(Post::class, 'location');
    }
}
