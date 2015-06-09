<?php namespace MeuKart;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anuncio extends Model {

    use SoftDeletes;

	protected $table = 'anuncios';
    protected $guarded = ['id'];

    protected $dates = ['data_exclusao'];

    public function usuario() 
    {
        return $this->belongsTo('\MeuKart\Usuario', 'id_usuario');
    }

    public static $rules = [
        'titulo' => 'required',
    ];
}
