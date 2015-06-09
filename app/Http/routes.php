<?php

/**
 * Index
 */
Route::get('/', 'IndexController@index');

/**
 * Anúncios
 */
Route::controller('/anuncios/novo', 'AnunciarController');
Route::controller('/anuncios', 'AnuncioController');

/**
 * Conta
 */
Route::controller('/conta', 'ContaController');

/**
 * CMS
 */
Route::controller('/cms', 'CmsController');