<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Ingreso extends Model
{
    use HasFactory;

    protected $table = 'ingresos';
    public $timestamps = false;


    protected $fillable = [
        'ingreso',
        'docdate',
        'taxdate'
    ];


    public function idetails()
    {
        return $this->hasMany(IngresoDetail::class);
    }

    public function getDocdateAttribute($value){
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function getTaxdateAttribute($value){
        return Carbon::parse($value)->format('d/m/Y');
    }
}
