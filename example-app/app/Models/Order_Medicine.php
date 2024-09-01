<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Medicine extends Model
{
    use HasFactory;
    protected $table='order_medicines';
    protected $fillable =[
        'order_id',
        'medicine_id',
        'quantity_request',
    ];
}
