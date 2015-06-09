@extends('app')

@section('title', 'Compra e venda de karts, motores e chassis')

@section('content')

    <div class="home-logo">
        <img src="{{asset('img/logo.png')}}" />
    </div>

    {!! Form::open(['url' => url('/anuncios'), 'method' => 'GET', 'class' => 'form validate']) !!}
        <div class="meu-well big main">
            <section class="main-title">
                <h2>Comprar</h2>

                <div class="clearfix"></div>

                <div class="button-group">
                    <button class="icon active"><img src="img/icons/kart.png"> Completo</button>
                    <button class="icon double"><img src="img/icons/chassi.png"><span><small>apenas</small>Chassi</span></button>
                    <button class="icon double"><img src="img/icons/motor.png"><span><small>apenas</small>Motor</span></button>
                </div>

                <div class="check">
                    <div class="checkbox">
                        <input type="checkbox" id="selecao_novo" name="selecao_novo" value="S" checked="checked">
                        <label for="selecao_novo"></label>
                    </div>
                    <label for="selecao_novo">Novo</label>

                    <div class="checkbox">
                        <input type="checkbox" id="selecao_usado" name="selecao_usado" value="S" checked="checked">
                        <label for="selecao_usado"></label>
                    </div>
                    <label for="selecao_usado">Usado</label>
                </div>

                <div class="clearfix"></div>

                <div class="box-left">
                    <div class="item vert">
                        <label for="marca_motor">Marca do motor</label>
                        <select data-placeholder="Selecione a marca do motor" name="marca_motor" id="marca_motor" class="chosen size9">
                            <option value=""></option>
                            <option value="1">13HP</option>
                            <option value="2">125CC AR</option>
                            <option value="3">125CC ÁGUA</option>
                            <option value="4">Shifter</option>
                        </select>
                    </div>
                    <div class="item vert">
                        <label for="modelo_motor">Modelo do motor</label>
                        <select data-placeholder="Selecione o modelo do motor" name="modelo_motor" id="modelo_motor" class="chosen size9" disabled="disabled">
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
                <div class="box-right">
                    <div class="item vert">
                        <label for="marca_chassi">Marca do chassi</label>
                        <select data-placeholder="Selecione a marca do chassi" name="marca_chassi" id="marca_chassi" class="chosen size9">
                            <option></option>
                            <option value="1">Mega</option>
                            <option value="2">Birel</option>
                            <option value="3">Techspeed</option>
                            <option value="4">Mini</option>
                        </select>
                    </div>
                    <div class="item vert">
                        <label for="modelo_chassi">Modelo do chassi</label>
                        <select data-placeholder="Selecione o modelo do chassi" name="modelo_chassi" id="modelo_chassi" class="chosen size9" disabled="disabled">
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

                <div class="box-bottom">
                    <div class="item horz">
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
                    <div class="item horz">
                        <label for="preco">Preço</label>
                        <input type="text" class="size2" placeholder="De (R$)" name="preco_de" id="preco">
                        <input type="text" class="size2" placeholder="Até (R$)" name="preco_ate">
                    </div>

                    <button type="submit" class="buscar">Buscar</button>
                    <div class="clearfix"></div>
                </div>

                <div class="clearfix"></div>
            </section>
        </div>

        <div class="clearfix"></div>
    </form>

    <div class="clearfix"></div>
@stop