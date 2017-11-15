<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use SoftDeletes;
    protected  $fillable= [
      'title', 'rating', 'awards', 'released_date', 'length'
    ];

    //este campo tiene que ser de tipo TIMESTAMP();
    protected $dates = ['deleted_at']; //deleted_at: campo que tengo que crear en la base de datos



    public function titulo(){
      return $this->title;
    }

    public function genre(){
      return $this->belongTo(Genre::class, 'genre_id');
    }



}
