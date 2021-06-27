<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //protected $connection = 'mysql';
    protected $fillable = [
        'genero'
    ];

    public function books()
    {
        return $this->hasMany('App\Models\Book');
    }
}
