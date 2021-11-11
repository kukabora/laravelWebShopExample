<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingInfo extends Model
{
    protected $table = 'billinginfos';
    protected $fillable = [
        'fname',
        'lname',
        'country',
        'city',
        'street',
        'apartment',
        'delivery_method',
        'delivery_company',
        'postal_code',
        'cc_type',
        'cc_code',
        'cc_number',
        'cc_holder'
    ];
    public $timestamps = false;
    use HasFactory;
}
