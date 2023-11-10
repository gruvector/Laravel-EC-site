<?php

namespace App\Models;

use App\Models\Admin\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
}
