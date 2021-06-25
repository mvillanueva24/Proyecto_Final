<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Book extends Model
{
    //,use HasFactory;

    protected $fillable = [
        'title', 'author', 'precio_compra', 'precio_venta', 'image','stock'
    ];

    public function sales()
    {
        return $this->hasMany('App\Models\Sale');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
