<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangSewaan extends Model
{
    protected $fillable = [
        'name', 'harga', 'deskripsi', 'category_id', 'image',
    ];
}
