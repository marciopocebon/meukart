<?php namespace MeuKart\Http\Controllers;

use MeuKart\Http\Requests;
use MeuKart\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AnuncioController extends Controller {

    function getIndex() {
        return view('pages.anuncio.lista');
    }
    
}