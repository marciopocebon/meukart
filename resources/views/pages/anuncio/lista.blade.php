@extends('app')

@section('title', 'Procurando anúncios')

@section('content')
    <section class="sidebar">
        <h2>Refinar busca</h2>
        {!! Form::open(['url' => url('/anuncios'), 'method' => 'GET', 'class' => 'form validate']) !!}
        <div class="meu-well">
            <div class="item vert">
                <label for="palavras_chave">Palavras-chave</label>
                <input type="text" class="size7" name="palavras_chave" id="palavras_chave" placeholder="Ex.: 4 tempos, ar, água...">
            </div>  
            <div class="keywords">
                <a href="">4 tempos X</a>
                <a href="">2 tempos X</a>
                <a href="">6 tempos X</a>
                <a href="">palavra teste X</a>
            </div>
            <div class="clearfix"></div>
            <div class="check">
                <div class="checkbox">
                    <input type="checkbox" id="selecao_foto" name="selecao_foto" value="S">
                    <label for="selecao_foto"></label>
                </div>
                <label for="selecao_foto">Apenas anúncios com fotos</label>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="meu-well no-padding">
            <div class="content-padding">
                <div class="check">
                    <div class="checkbox">
                        <input type="checkbox" id="selecao_foto" name="selecao_foto" value="S">
                        <label for="selecao_foto"></label>
                    </div>
                    <label for="selecao_foto">Novos</label>
                    <div class="checkbox">
                        <input type="checkbox" id="selecao_foto" name="selecao_foto" value="S">
                        <label for="selecao_foto"></label>
                    </div>
                    <label for="selecao_foto">Usados</label>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="section">
                <h2>Localização</h2>
                <div class="item content-padding">
                    <label for="uf">Estado/cidade</label>
                    <select data-placeholder="UF" name="uf" id="uf" class="chosen size2">
                        <option></option>
                        <option value="1">SC</option>
                        <option value="2">PR</option>
                        <option value="3">BA</option>
                    </select>
                    <select data-placeholder="Cidade" name="cidade" class="chosen size4">
                        <option></option>
                        <option value="1">Rio do Sul</option>
                        <option value="2">Lontras</option>
                        <option value="3">Ituporanga</option>
                        <option value="4">Ibirama</option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="section">
                <h2>Motorização</h2>
                <div class="content-padding">
                    <div class="item vert">
                        <label for="marca_motor">Marca do motor</label>
                        <select data-placeholder="Selecione a marca do motor" name="marca_motor" id="marca_motor" class="chosen size8">
                            <option value=""></option>
                            <option value="1">13HP</option>
                            <option value="2">125CC AR</option>
                            <option value="3">125CC ÁGUA</option>
                            <option value="4">Shifter</option>
                        </select>
                    </div>
                    <div class="item vert">
                        <label for="modelo_motor">Modelo do motor</label>
                        <select data-placeholder="Selecione o modelo do motor" name="modelo_motor" id="modelo_motor" class="chosen size8" disabled="disabled">
                            <option></option>
                            <option value="1">13HP</option>
                            <option value="2">125CC AR</option>
                            <option value="3">125CC ÁGUA</option>
                            <option value="4">Shifter</option>
                        </select>
                    </div>
                    <div class="item vert">
                        <label for="ano_motor">Ano do motor</label>
                        <select data-placeholder="De" name="ano_motor_de" id="ano_motor" class="chosen size3">
                            <option></option>
                            <option value="1">2015</option>
                            <option value="2">2014</option>
                            <option value="3">2013</option>
                            <option value="4">2012</option>
                        </select>
                        <select data-placeholder="Até" name="ano_motor_ate" class="chosen size3">
                            <option></option>
                            <option value="1">2015</option>
                            <option value="2">2014</option>
                            <option value="3">2013</option>
                            <option value="4">2012</option>
                        </select>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="section">
                <h2>Chassi</h2>
                <div class="content-padding">
                    <div class="item vert">
                        <label for="marca_motor">Marca do chassi</label>
                        <select data-placeholder="Selecione a marca do chassi" name="marca_chassi" id="marca_chassi" class="chosen size8">
                            <option value=""></option>
                            <option value="1">13HP</option>
                            <option value="2">125CC AR</option>
                            <option value="3">125CC ÁGUA</option>
                            <option value="4">Shifter</option>
                        </select>
                    </div>
                    <div class="item vert">
                        <label for="modelo_chassi">Modelo do chassi</label>
                        <select data-placeholder="Selecione o modelo do chassi" name="modelo_chassi" id="modelo_chassi" class="chosen size8" disabled="disabled">
                            <option></option>
                            <option value="1">13HP</option>
                            <option value="2">125CC AR</option>
                            <option value="3">125CC ÁGUA</option>
                            <option value="4">Shifter</option>
                        </select>
                    </div>
                    <div class="item vert">
                        <label for="ano_chassi">Ano do chassi</label>
                        <select data-placeholder="De" name="ano_chassi_de" id="ano_chassi" class="chosen size3">
                            <option></option>
                            <option value="1">2015</option>
                            <option value="2">2014</option>
                            <option value="3">2013</option>
                            <option value="4">2012</option>
                        </select>
                        <select data-placeholder="Até" name="ano_chassi_ate" class="chosen size3">
                            <option></option>
                            <option value="1">2015</option>
                            <option value="2">2014</option>
                            <option value="3">2013</option>
                            <option value="4">2012</option>
                        </select>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="section">
                <h2>Preço</h2>
                <div class="item content-padding">
                    <label for="preco">Preço</label>
                    <input type="text" class="size2" placeholder="De (R$)" name="preco_de" id="preco">
                    <input type="text" class="size2" placeholder="Até (R$)" name="preco_ate">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        {!! Form::close(); !!}
        <div class="clearfix"></div>
    </section>
    <section class="side-content">
        <div class="filtro meu-well small gray">
            <strong>248 anuncios em Rio do Sul - SC</strong>
            {!! Form::open(['url' => url('/anuncios'), 'method' => 'GET', 'class' => 'form validate']) !!}
                <div class="item">
                    <select name="anuncios_pagina" id="anuncios_pagina" class="chosen size6">
                        <option value="12">12 anúncios por página</option>
                        <option value="24">24 anúncios por página</option>
                        <option value="36">36 anúncios por página</option>
                        <option value="48">48 anúncios por página</option>
                    </select>
                </div>
                <div class="item">
                    <select name="ordenacao" id="ordenacao" class="chosen size5">
                        <option value="original">Ordenação original</option>
                        <option value="preco">Ordenar por preço</option>
                        <option value="ano">Ordenar por ano</option>
                    </select>
                </div>
            {!! Form::close() !!}
            <div class="clearfix"></div>
        </div>
        <div class="anuncio meu-well">
            <h2><a class="fav" href=""><img src="{{ asset('img/icons/fav.png') }}"></a> Kart completo 13HP 2012 / Chassi Mega</h2>
            <span class="price-tag">
                R$ 3.000,00
            </span>

            <div class="images">
                <img class="grande" src="{{ asset('img/grande.jpg') }}" alt="">
                <div class="mini">
                    <img src="{{ asset('img/pequena.jpg') }}" alt="">
                    <img src="{{ asset('img/pequena.jpg') }}" alt="">
                    <img src="{{ asset('img/pequena.jpg') }}" alt="">
                </div>
            </div>
            <div class="info">
                <ul>
                    <li class="motor">Honda GX 390 - 13HP (2011)</li>
                    <li class="chassi">MEGA MX SERIE OURO (2010)</li>
                </ul>
                <div class="comprador">
                    <strong>DIEGO</strong><br>
                    Rio do Sul (SC)
                </div>
                <div class="clearfix"></div>
                <hr class="margin">
                <div class="buttons">
                    <a href="" class="telefone">TELEFONE</a>
                    <a href="" class="anuncio">Ver anúncio</a>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
        <div class="anuncio meu-well">
            <h2><a class="fav" href=""><img src="{{ asset('img/icons/fav.png') }}"></a> Kart completo 13HP 2012 / Chassi Mega</h2>
            <span class="price-tag">
                R$ 3.000,00
            </span>

            <div class="images">
                <img class="grande" src="{{ asset('img/grande.jpg') }}" alt="">
                <div class="mini">
                    <img src="{{ asset('img/pequena.jpg') }}" alt="">
                    <img src="{{ asset('img/pequena.jpg') }}" alt="">
                    <img src="{{ asset('img/pequena.jpg') }}" alt="">
                </div>
            </div>
            <div class="info">
                <ul>
                    <li class="motor">Honda GX 390 - 13HP (2011)</li>
                    <li class="chassi">MEGA MX SERIE OURO (2010)</li>
                </ul>
                <div class="comprador">
                    <strong>DIEGO</strong><br>
                    Rio do Sul (SC)
                </div>
                <div class="clearfix"></div>
                <hr class="margin">
                <div class="buttons">
                    <a href="" class="telefone">TELEFONE</a>
                    <a href="" class="anuncio">Ver anúncio</a>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
        <div class="anuncio meu-well">
            <h2><a class="fav" href=""><img src="{{ asset('img/icons/fav.png') }}"></a> Kart completo 13HP 2012 / Chassi Mega</h2>
            <span class="price-tag">
                R$ 3.000,00
            </span>

            <div class="images">
                <img class="grande" src="{{ asset('img/grande.jpg') }}" alt="">
                <div class="mini">
                    <img src="{{ asset('img/pequena.jpg') }}" alt="">
                    <img src="{{ asset('img/pequena.jpg') }}" alt="">
                    <img src="{{ asset('img/pequena.jpg') }}" alt="">
                </div>
            </div>
            <div class="info">
                <ul>
                    <li class="motor">Honda GX 390 - 13HP (2011)</li>
                    <li class="chassi">MEGA MX SERIE OURO (2010)</li>
                </ul>
                <div class="comprador">
                    <strong>DIEGO</strong><br>
                    Rio do Sul (SC)
                </div>
                <div class="clearfix"></div>
                <hr class="margin">
                <div class="buttons">
                    <a href="" class="telefone">TELEFONE</a>
                    <a href="" class="anuncio">Ver anúncio</a>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
        <div class="anuncio meu-well">
            <h2><a class="fav" href=""><img src="{{ asset('img/icons/fav.png') }}"></a> Kart completo 13HP 2012 / Chassi Mega</h2>
            <span class="price-tag">
                R$ 3.000,00
            </span>

            <div class="images">
                <img class="grande" src="{{ asset('img/grande.jpg') }}" alt="">
                <div class="mini">
                    <img src="{{ asset('img/pequena.jpg') }}" alt="">
                    <img src="{{ asset('img/pequena.jpg') }}" alt="">
                    <img src="{{ asset('img/pequena.jpg') }}" alt="">
                </div>
            </div>
            <div class="info">
                <ul>
                    <li class="motor">Honda GX 390 - 13HP (2011)</li>
                    <li class="chassi">MEGA MX SERIE OURO (2010)</li>
                </ul>
                <div class="comprador">
                    <strong>DIEGO</strong><br>
                    Rio do Sul (SC)
                </div>
                <div class="clearfix"></div>
                <hr class="margin">
                <div class="buttons">
                    <a href="" class="telefone">TELEFONE</a>
                    <a href="" class="anuncio">Ver anúncio</a>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
        <div class="anuncio meu-well">
            <h2><a class="fav" href=""><img src="{{ asset('img/icons/fav.png') }}"></a> Kart completo 13HP 2012 / Chassi Mega</h2>
            <span class="price-tag">
                R$ 3.000,00
            </span>

            <div class="images">
                <img class="grande" src="{{ asset('img/grande.jpg') }}" alt="">
                <div class="mini">
                    <img src="{{ asset('img/pequena.jpg') }}" alt="">
                    <img src="{{ asset('img/pequena.jpg') }}" alt="">
                    <img src="{{ asset('img/pequena.jpg') }}" alt="">
                </div>
            </div>
            <div class="info">
                <ul>
                    <li class="motor">Honda GX 390 - 13HP (2011)</li>
                    <li class="chassi">MEGA MX SERIE OURO (2010)</li>
                </ul>
                <div class="comprador">
                    <strong>DIEGO</strong><br>
                    Rio do Sul (SC)
                </div>
                <div class="clearfix"></div>
                <hr class="margin">
                <div class="buttons">
                    <a href="" class="telefone">TELEFONE</a>
                    <a href="" class="anuncio">Ver anúncio</a>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </section>
    <div class="clearfix"></div>
@stop