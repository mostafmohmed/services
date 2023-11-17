<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servises extends Model
{
    protected   $fillable =['icon',	'name' ,	'descreption'] ;
    use HasFactory;
}
