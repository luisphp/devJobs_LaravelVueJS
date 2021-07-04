<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Salario;
use App\Models\Ubicacion;
use App\Models\Experiencia;
use App\Models\User;

class Vacante extends Model
{
    use HasFactory;

    protected $fillable  = [
        'descripcion', 
        'titulo',
        'categoria_id',
        'imagen',
        'skills',
        'activa',
        'experiencia_id',
        'ubicacion_id',
        'salario_id',
        'user_id'
    ];

    //Relacion 1:1 con categoria
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
    //Relacion 1:1 con salario
    public function salario(){
        return $this->belongsTo(Salario::class);
    }
    //Relacion 1:1 con ubicacion
    public function ubicacion(){
        return $this->belongsTo(Ubicacion::class);
    }
    //Relacion 1:1 con experiencia
    public function experiencia(){
        return $this->belongsTo(Experiencia::class);
    }
    //Relacion 1:1 con usuario
    public function reclutador(){
        return $this->belongsTo(user::class, 'user_id');
    }
    //Relacion 1:n 
    public function candidatos(){
        return $this->hasMany(Candidato::class);
    }
}
