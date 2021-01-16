<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concept extends Model
{
    use HasFactory;

    protected $table = 'concepts';
    public $timestamps = true;


    protected $fillable = [
        'clasification',
        'name',
        'description'
    ];
}
