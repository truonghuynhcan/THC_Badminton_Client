<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCate extends Model
{
    use HasFactory;
    public function posts(){
        return $this->belongsToMany(News::class);
    }
}
