<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['numero_1', 'numero_2', 'resultado'];
}
