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
        'lang'
    ];

    public function getShortIngrediency()
    {
        return Str::limit(strip_tags($this->ingrediency), 20);
    }

    public function getShortTN()
    {
        return Str::limit(strip_tags($this->tablet_name), 20);
    }

    public function getShortWTG()
    {
        return Str::limit(strip_tags($this->where_to_get), 20);
    }

    public function getShortNote()
    {
        return Str::limit(strip_tags($this->note), 20);
    }

    public function getShortUse()
    {
        return Str::limit(strip_tags($this->use), 20);
    }
}
