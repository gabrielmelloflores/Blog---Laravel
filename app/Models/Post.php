<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Para não realizar diversas sql no foreach
    protected $with = ['category', 'author'];
    protected  $guarded = [];
//    protected $guarded = ['id'];
//    protected $fillable = ['title', 'excerpt', 'body', 'category_id', 'slug'];


    public function category(){
        //hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }

    public function author(){
        //hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(User::class, 'user_id');
    }
    //para que no web.php o {post} encontre pelo defenido nessa função no caso slug
//    public function getRouteKeyName()
//    {
//        return 'slug';
//    }
}
