<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'token',
        'tablet_name',
        'use',
        'ingrediency',
        'where_to_get',
        'medicine_img',
        'note',
    ];

    public function getShortUse()
    {
        return Str::limit(strip_tags($this->use), 20);
    }
}
