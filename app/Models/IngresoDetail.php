<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngresoDetail extends Model
{
    use HasFactory;

    protected $table = 'ingreso_details';
    public $timestamps = true;


    protected $fillable = [
        'concept_id',
        'quantity',
        'amount',
        'ingreso_id'
    ];

    public function ingreso()
    {
        return $this->belongsTo(Ingreso::class, 'ingreso_id');
    }

    public function concept()
    {
        return $this->belongsTo(Concept::class, 'concept_id');
    }
}
