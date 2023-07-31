<?php

namespace App\Models;

use App\Http\Controllers\writer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ["title","body","images","category_id","writer_id","essential"];
    use HasFactory;
    function writer(){
        return $this->hasOne(writer::class , "writer_id","id");
    }
    function categories(){
        return $this->hasMany(Classification::class,"category_id","id");
    }
}
