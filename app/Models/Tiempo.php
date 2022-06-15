<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tiempo
 *
 * @property $id
 * @property $nombre_consultor
 * @property $departamento
 * @property $horas_acumuladas
 * @property $tiene_derecho
 * @property $horas_consumidas
 * @property $created_at
 * @property $updated_at
 *
 * @property Consultor[] $consultors
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tiempo extends Model
{
    
    static $rules = [ 
    'consultors_id' => 'required',
    'nombre_consultor' => 'required',
    'horas_acumuladas' => 'required',
		'tiene_derecho' => 'required',
		'horas_consumidas' => 'required',
    
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
      'consultors_id',
      'nombre_consultor',
      'horas_acumuladas',
      'tiene_derecho',
      'horas_consumidas'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function consultors()
    {
        return $this->belongsTo('App\Models\Consultor', 'consultors_id', 'id');
    }
    
    // public function Consultor(){
    //   return $this->belongsTo('App\Models\Consultor');
    // }

}
