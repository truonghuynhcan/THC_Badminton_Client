<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public function Categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function OrderDetails()
    {
        return $this->hasMany(OrderDetails::class);
    }
}
