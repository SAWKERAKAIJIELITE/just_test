<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Knowledge extends Model
{
    use HasFactory;
    protected $fillable = [

        'User_id',
        'specilaty_id',
        'started_at',


    ];
    public function Speciality():BelongsTo
    {

        return $this->belongsTo(Speciality::class, 'specilaty_id',);

    }
    public function User():BelongsTo
    {

        return $this->belongsTo(User::class, 'User_id',);

    }
}
