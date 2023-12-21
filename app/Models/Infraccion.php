<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infraccion extends Model
{
    use HasFactory;
    protected $table="infracciones";
    protected $fillable=[
        "auto_id",
        "fecha",
        "descripcion",
        "tipo",
    ];
}
