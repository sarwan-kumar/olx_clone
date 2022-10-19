<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classifieds extends Model
{
    use HasFactory;

    protected $table='classifieds';
    protected $primerykeys='id';
}
