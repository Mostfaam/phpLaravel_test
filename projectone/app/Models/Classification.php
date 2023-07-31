<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    use HasFactory;
    protected $fillable = ["name","image","description"];
    function news(){
        return $this->hasMany(News::class , "category_id","id");
    }
}
