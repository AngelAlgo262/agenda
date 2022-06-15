<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    static $rules=[
        'title'=>'required',
        'descripcion',
        'start'=>'required',
        'end'=>'required',
    ];
 
    protected $fillable = ['title','descripcion','start','end'];

    //Relacion muchos a muchos
    public function consultors()
    {
        return $this->belongsToMany('App\Models\Consultor');
    }
}
