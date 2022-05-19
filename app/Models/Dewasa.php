<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dewasa extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'jk', 'usia', 'bb', 'tb', 'tensi','lila',];
}
