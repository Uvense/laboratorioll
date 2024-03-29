<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lista
 *
 * @property $id
 * @property $Nombre
 * @property $Descripcion
 * @property $FechaV
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lista extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Descripcion' => 'required',
		'FechaV' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Descripcion','FechaV'];



}
