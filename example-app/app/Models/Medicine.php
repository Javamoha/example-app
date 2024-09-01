<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Medicine extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'scientific_name',
        'commercial_name',
        'category',
        'company_name',
        'validity',
        'price',
        'quantity',
        'image'
    ];
    protected $hidden =[
        'created_at',
        'updated_at',
        'id'
    ];
      public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_medicines')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }
    public function quantity_available()
    {
        return $this->belongsTo(Quantity_Available::class);
    }
   
}
