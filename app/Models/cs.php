<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cs extends Model
{
    protected $table = "css";
    use HasFactory;
    public $timestamps = false;
    protected $guarded=[];
}
