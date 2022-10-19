<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Classified extends Model
{
    use HasFactory;


    public  function catfull()
    {
        return $this->belongsTo(Category::class,'category','id');
    }
    public function images()
    {
        return $this->hasMany(Images::class,'itemid','id');
    }

    public  function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
