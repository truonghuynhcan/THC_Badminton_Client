<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    public function newsCate(){
        return $this->belongsToMany(NewsCate::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }
}
