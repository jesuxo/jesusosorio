<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sainsta extends Model
{
    use HasFactory;
    protected $table    = 'sainsta';
    protected $fillable = ['codinst', 'descrip', 'insPadre', 'nivel', 'tipoIns', 'DEsComp', 'codalte', 'desseri'];

    public function padre(){
        return $this->belongsTo(Sainsta::class, 'insPadre', 'codinst');
    }

    public function hijos  (){
        return $this->hasMany(Sainsta::class, 'insPadre', 'id') ;
    }

    public function productos  (){
        return $this->hasMany(Saprod::class, 'codinst', 'codinst');
    }

    public function productosexistencias  (){

        return $this->hasMany(Saprod::class, 'codinst', 'codinst')
            ->where('saprod.existen', '<>', 0);
    }

    public function servicios  (){
        return $this->hasMany(Saserv::class, 'codinst', 'codinst');
    }

    public function comercial  (){
        return $this->belongsTo(Sacomercial::class, 'comercial', 'id');
    }
}
