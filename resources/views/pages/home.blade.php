@extends('app')

@section('title', 'Compra e venda de karts, motores e chassis')

@section('content')
    <form class="form" action="" method="GET">
        <section class="main-title">
            <h2>Comprar</h2>
            <div class="button-group">
                <button class="icon active"><img src="img/icons/kart.png"> Completo</button>
                <button class="icon"><img src="img/icons/chassi.png">Chassi</button>
                <button class="icon"><img src="img/icons/motor.png">Motor</button>
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
        </section>

        <div class="clearfix"></div>

        <section class="main">
            <div class="linha">
                <div class="item">
                    <label for="motorizacao">Motorização</label>
                    <select data-placeholder="Selecione o motor" name="motorizacao" id="motorizacao" class="chosen size10">
                        <option></option>
                        <option value="1">13HP</option>
                        <option value="2">125CC AR</option>
                        <option value="3">125CC ÁGUA</option>
                        <option value="4">Shifter</option>
                    </select>
                </div>
                <div class="item">
                    <label for="ano_motor">Ano do Motor</label>
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
                <div class="item">
                    <label for="chassi">Marca do Chassi</label>
                    <select data-placeholder="Selecione a marca" name="chassi" id="chassi" class="chosen size10">
                        <option></option>
                        <option value="1">Mega</option>
                        <option value="2">Birel</option>
                        <option value="3">Techspeed</option>
                        <option value="4">Mini</option>
                    </select>
                </div>
                <div class="item">
                    <label for="ano_chassi">Ano do Chassi</label>
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
            <div class="linha">
                <div class="item">
                    <label for="modelo">Modelo</label>
                    <select data-placeholder="Selecione o modelo" name="modelo" id="modelo" class="chosen size10">
                        <option></option>
                        <option value="1">13HP</option>
                        <option value="2">125CC AR</option>
                        <option value="3">125CC ÁGUA</option>
                        <option value="4">Shifter</option>
                    </select>
                </div>
                <div class="item">
                    <label for="uf">Estado/Cidade</label>
                    <select data-placeholder="UF" name="uf" id="uf" class="chosen size2">
                        <option></option>
                        <option value="1">SC</option>
                        <option value="2">PR</option>
                        <option value="3">BA</option>
                    </select>
                    <select data-placeholder="Cidade" name="cidade" class="chosen size5">
                        <option></option>
                        <option value="1">Rio do Sul</option>
                        <option value="2">Lontras</option>
                        <option value="3">Ituporanga</option>
                        <option value="4">Ibirama</option>
                    </select>
                </div>
                <div class="item">
                    <label for="preco">Preço</label>
                    <input type="text" class="size3" placeholder="De (R$)" name="preco_de" id="preco" />
                    <input type="text" class="size3" placeholder="Até (R$)" name="preco_ate" />
                </div>

                <button type="submit" class="buscar">Buscar karts</button>
            </div>

            <div class="clearfix"></div>
        </section> 
    </form>

    <div class="clearfix"></div>
@stop