<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supports extends Model
{
    use HasFactory;
    protected $table='support';
    protected $primerykeys='id';
}
