<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'first_name',
        'last_name',
        'birth_date',
        'email',
        'password',
        'password_confirmation',
        'phone_number',
        'current_location',
        'programming_age',
        'gender',
        'bio','image_name','country',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function Student():BelongsTo
    {

        return $this->belongsTo(Student::class, 'student_id',);

    }
    public function Expert():BelongsTo
    {

        return $this->belongsTo(Expert::class, 'expert_id',);

    }
    public function Page():HasMany
    {
        return $this->hasMany(Page::class,  'admin_id');
    }
    public function Follow_Page():HasMany
    {
        return $this->hasMany(Follow_Page::class,  'user_id');
    }
    public function Request_sender():HasMany
    {
        return $this->hasMany(Request_Media::class,'sender');


    }public function Request_reciever():HasMany
    {
        return $this->hasMany(Request_Media::class, 'reciever');
    }
    public function invite_sender():HasMany
    {
        return $this->hasMany(Invite::class,'sender_invite');


    }public function invite_reciever():HasMany
    {
        return $this->hasMany(Invite::class, 'reciever_invite');
    }
    public function Knowledge(): HasMany
    {
        return $this->hasMany(Knowledge::class, 'User_id', );
    }
    public function Post(): HasMany
    {
        return $this->hasMany(Post::class, 'user_id', );
    }

    public function posts()
    {
        return $this->morphMany(Post::class, 'location');
    }
    
    public function Subscribe_Communities(): HasMany
    {
        return $this->hasMany(Subscribe_Communities::class, 'user_id', );
    }
    public function Favorite_Posts(): HasMany
    {
        return $this->hasMany(Favorite_Posts::class, 'user_id', );
    }
    public function Comments(): HasMany
    {
        return $this->hasMany(Comments::class, 'commenter_id', );
    }
    public function Reactions(): HasMany
    {
        return $this->hasMany(Reactions::class, 'user_id', );
    }
}
