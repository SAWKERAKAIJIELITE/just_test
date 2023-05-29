<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Expert extends Model
{
    use HasFactory;
    protected $fillable = [
        'companies',
        'years_as_expert',
        'work_at_company',
        'start_year',
        'section',

    ];
    public function User():HasOne
    {
        return $this->hasOne(User::class, 'expert_id');
    }
}
