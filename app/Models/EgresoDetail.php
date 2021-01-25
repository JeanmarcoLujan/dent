<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EgresoDetail extends Model
{
    use HasFactory;

    protected $table = 'egreso_details';
    public $timestamps = true;


    protected $fillable = [
        'concept_id',
        'quantity',
        'amount',
        'ingreso_id'
    ];

    public function egreso()
    {
        return $this->belongsTo(Egreso::class, 'egreso_id');
    }

    public function concept()
    {
        return $this->belongsTo(Concept::class, 'concept_id');
    }
}
