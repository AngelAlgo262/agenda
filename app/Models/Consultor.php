<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consultor
 *
 * @property $id
 * @property $nombre
 * @property $departamento
 * @property $created_at
 * @property $updated_at
 *
 * @property Tiempo $tiempo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consultor extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'departamento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','departamento'];

    //Relacion uno a uno
    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function tiempos()
    {
        return $this->hasOne('App\Models\Tiempo', 'id', 'consultors_id');
    }
   
    // Relacion muchos a muchos
    public function eventos()
    {
        return $this->belongsToMany('App\Models\Evento');
    }

}
