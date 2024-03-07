<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = [
        'token',
        'scientific_name',
        'local_name',
        'place',
        'root',
        'stem',
        'leaves',
        'flower',
        'plant_img',
        'uses',
    ];
}
