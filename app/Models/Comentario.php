<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'contenido', 'user_id','entrada_id'
    ];
    //referencia a la tabla y primaryKey
    protected $table = 'comentarios';
    protected $primaryKey = 'id';
}
