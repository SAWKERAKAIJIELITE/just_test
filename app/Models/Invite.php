<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Invite extends Model
{
    use HasFactory;
    protected $fillable = [
        'sender_invite',
        'reciever_invite',
        'page_invite_id',
        'is_approved'

    ];
    public function User_invite_sender():BelongsTo
    {

        return $this->belongsTo(User::class, 'sender_invite',);

    }
    public function User_invite_reciever():BelongsTo
    {

        return $this->belongsTo(User::class, 'reciever_invite',);

    }
    public function Page_invite():BelongsTo
    {
        return $this->belongsTo(Invite::class,  'page_invite_id');
    }
}
