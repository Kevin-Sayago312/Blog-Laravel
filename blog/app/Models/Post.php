<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //? RELACION MUCHOS A UNO
    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function category(){
        return $this -> belongsTo(Category::class);
    }

    public function tags(){
        return $this -> belongsToMany(Tag::class);
    }

    //! RELACION UNO A UNO POLIMORFICA
    public function image(){
        return $this -> morphOne(Image::class, 'imageable');
    }
}
