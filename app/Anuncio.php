<?php namespace MeuKart;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model {

    protected $fillable = [
        'titulo',
        'descricao'
    ];

}