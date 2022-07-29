<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
<<<<<<< HEAD
//    protected $fillable = [
//        'name',
//        'email',
//        'password',
//    ];

=======
    /* protected $fillable = [
        'name',
        'email',
        'password',
    ]; */
>>>>>>> 9ecf656173dee0ff998622a25dd59c94da2dc3eb
    protected $guarded = [];
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
    ];

    public function setPasswordAttribute($password) { //Quando passado o nome do atributo entre set e atrribute ele roda essa função
        $this->attributes['password'] = bcrypt($password);
    }

    public function setUsernameAttribute($username) {
        return ucwords($username);
    }

    public function posts() { //$user->$posts
        return $this->hasMany(Post::class);
    }
}
