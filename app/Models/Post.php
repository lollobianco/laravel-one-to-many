<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts_table';

    protected $fillable = [
        'title',
        'body',
        'category_id'
    ];

    public function categories(){
        //funzione di relazione
        //Il post ha una sola categoria associata
        return $this->belongsTo('App\Models\Category');
    }

}
