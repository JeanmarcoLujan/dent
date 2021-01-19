<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    use HasFactory;

    protected $table = 'collaborators';
    public $timestamps = true;


    protected $fillable = [
        'dni',
        'firstname',
        'lastname',
        'phone',
        'email',
        'status'
    ];

    public function specialty(){ //$libro->categoria->nombre
        return $this->belongsTo(Specialty::class); //Pertenece a una categoría.
    }


}
