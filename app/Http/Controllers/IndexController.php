<?php namespace MeuKart\Http\Controllers;

use MeuKart\Http\Requests;
use MeuKart\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndexController extends Controller {

	public function index()
    {
        return view('pages.home');
    }

    public function anunciar()
    {
        return view('pages.anunciar');
    }

}
