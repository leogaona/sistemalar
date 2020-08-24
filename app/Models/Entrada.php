<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
   /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'contenido','user_id'
    ];
    //UNO A MUCHOS INVERSA
    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function comentarios(){
        return $this->hasMany('App\Models\Comentario');
    }
}
