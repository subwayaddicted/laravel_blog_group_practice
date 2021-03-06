<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $guarded = [];
    // protected $fillable = ['title','slug','text','user_id','category_id'];
    //

    /**
     * Получить категорию.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
