<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $table="vehiculos";

    protected $fillable = ['placa', 'modelo', 'propietario'];

    public function entradas()
    {
        return $this->hasMany(Entrada::class, 'placa', 'placa');
    }
}
