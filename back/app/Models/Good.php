<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $table = 'goods';
    protected $fillable = [
        'good_description',
        'good_name',
        'image_field',
        'price',
        'inverted_picture'
    ];
    public $timestamps = false;
    use HasFactory;
}
