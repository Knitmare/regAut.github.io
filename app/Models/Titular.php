<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titular extends Model
{
    use HasFactory;
    protected $table="titulares";
    protected $fillable=[
        "apellido",
        "nombre",
        "dni",
        "domicilio",
    ];
    public function autos(){
        return $this->hasMany(Auto::class);
    }
}

