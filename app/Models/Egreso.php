<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Egreso extends Model
{
    use HasFactory;

    protected $table = 'egresos';
    public $timestamps = false;


    protected $fillable = [
        'egreso',
        'docdate',
        'taxdate'
    ];


    public function edetails()
    {
        return $this->hasMany(EgresoDetail::class);
    }

    public function getDocdateAttribute($value){
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function getTaxdateAttribute($value){
        return Carbon::parse($value)->format('d/m/Y');
    }
}
