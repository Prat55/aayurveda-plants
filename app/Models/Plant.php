<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    public function getShortUses()
    {
        return Str::limit(strip_tags($this->uses), 20);
    }

    public function getShortLName()
    {
        return Str::limit(strip_tags($this->local_name), 20);
    }
    public function getShortRoot()
    {
        return Str::limit(strip_tags($this->root), 20);
    }
    public function getShortStem()
    {
        return Str::limit(strip_tags($this->stem), 20);
    }

    public function getShortLeaves()
    {
        return Str::limit(strip_tags($this->leaves), 20);
    }
    public function getShortFlower()
    {
        return Str::limit(strip_tags($this->flower), 20);
    }
    public function getShortLocalName()
    {
        return Str::limit(strip_tags($this->local_name), 20);
    }
}
