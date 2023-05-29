<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Subscribe_Communities extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'Community_id',

    ];
    /**
     * Get the user that owns the Subscribe_Communities
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function community(): BelongsTo
    {
        return $this->belongsTo(Communities::class, 'Community_id');
    }
}
