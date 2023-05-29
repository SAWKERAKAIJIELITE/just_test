<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Request_Media extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'is_approved',
        'sender',
        'reciever',


    ];
    public function User_sender():BelongsTo
    {

        return $this->belongsTo(User::class, 'sender',);

    }
    public function User_reciever():BelongsTo
    {

        return $this->belongsTo(User::class, 'reciever',);

    }

}
