<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    public function Products()
    {
        return $this->belongsTo(Products::class);
    }
    public function Orders()
    {
        return $this->belongsTo(Orders::class);
    }
   
}
