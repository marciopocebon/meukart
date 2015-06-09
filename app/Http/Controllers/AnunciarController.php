<?php namespace MeuKart\Http\Controllers;

use MeuKart\Http\Requests;
use MeuKart\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AnunciarController extends Controller {

	function getIndex() {
        return view('pages.anuncio.anunciar.plano');
    }

    function getInformacoes() {
        return view('pages.anuncio.anunciar.informacoes');
    }

}
