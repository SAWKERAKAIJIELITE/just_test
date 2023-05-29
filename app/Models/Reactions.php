<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reactions extends Model
{
    use HasFactory;
    protected $fillable = [
        'type','location_type','location_id',
        'user_id','location',

    ];
    public function User():BelongsTo
    {
        return $this->belongsTo(User::class,  'user_id');
    }
    public function location()
    {
        return $this->morphTo();
    }
}
