@extends('app')

@section('title', 'Informações da venda')

@section('content')
    <form class="form" action="" method="GET">
        <section class="main-title">
            <h2>Vender</h2>

            <div class="info-ajuda">
                <p>
                    ATENDIMENTO: <a href="tel:+554735210000">(47) 3521-0000</a><br>
                    De <strong>segunda</strong> à <storng>sábado</storng>, das <strong>8h</strong> até <strong>20h</strong>
                </p>
                <a href="" title="Dúvidas" class="button-outline">Dúvidas</a>
            </div>

            <div class="clearfix"></div>
        </section>
        <div class="clearfix"></div>
        <hr>
        <div class="clearfix"></div>
        <section class="passos">
            <div class="passo">
                <div class="numero">
                    1º
                </div>
                <div class="info">
                    <h3>Selecione o plano</h3>
                    <p>Um plano para cada necessidade</p>
                </div>
            </div>
            <div class="passo active">
                <div class="numero">
                    2º
                </div>
                <div class="info">
                    <h3>Informações da venda</h3>
                    <p>Um resumo detalhado do produto</p>
                </div>
            </div>
            <div class="passo">
                <div class="numero">
                    3º
                </div>
                <div class="info">
                    <h3>Identificação</h3>
                    <p>Crie uma conta ou faça login</p>
                </div>
            </div>
            <div class="passo">
                <div class="numero">
                    4º
                </div>
                <div class="info">
                    <h3>Pagamento</h3>
                    <p>Pague da maneira que preferir</p>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <hr>
        <div class="clearfix"></div>
        
    </form>
@stop