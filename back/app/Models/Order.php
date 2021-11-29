<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'order_date',
        'owner_id',
        'good_id'
    ];
    public $timestamps = false;
    use HasFactory;
}

