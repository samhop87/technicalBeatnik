<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WeightEntry extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'weight_in_grams'
    ];
}
