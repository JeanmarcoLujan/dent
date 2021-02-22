<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntryDetail extends Model
{
    use HasFactory;

    protected $table = 'entry_details';
    public $timestamps = false;


    protected $fillable = [
        'exam_id',
        'values'
    ];

    public function exam(){ //$libro->categoria->nombre
        return $this->belongsTo(Exam::class); //Pertenece a una categoría.
    }

}
