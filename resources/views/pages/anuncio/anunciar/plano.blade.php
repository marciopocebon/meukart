@extends('app')

@section('title', 'Anunciar')

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
            <div class="passo active">
                <div class="numero">
                    1º
                </div>
                <div class="info">
                    <h3>Selecione o plano</h3>
                    <p>Um plano para cada necessidade</p>
                </div>
            </div>
            <div class="passo">
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
        <section class="planos meu-well">
            <div class="plano well big">
                <div class="block title">
                    <img src="../img/icons/premium.png">
                    <h3>Premium</h3>
                    <p>Para quem quer vender mais rápido</p>
                </div>
                <div class="block">
                    <h4>4</h4>
                    <p>mini-fotos no resultado da busca</p>
                </div>
                <div class="block">
                    <h4>1ª</h4>
                    <p>prioridade nos resultados da busca</p>
                </div>
                <div class="block">
                    <p class="preco">
                        4x sem juros de<br>
                        <span>R$ 29,98</span><br>
                        ou <strong>R$ 119,90</strong> à vista
                    </p>
                </div>
                <div class="block botao">
                    <a href="">Anunciar</a>
                </div>
            </div>
            <div class="plano well big">
                <div class="block title">
                    <img src="../img/icons/basico.png">
                    <h3>Básico</h3>
                    <p>O plano padrão que cabe no seu bolso</p>
                </div>
                <div class="block">
                    <h4>2</h4>
                    <p>mini-fotos no resultado da busca</p>
                </div>
                <div class="block">
                    <h4>2ª</h4>
                    <p>prioridade nos resultados da busca</p>
                </div>
                <div class="block">
                    <p class="preco">
                        4x sem juros de<br>
                        <span>R$ 22,48</span><br>
                        ou <strong>R$ 89,90</strong> à vista
                    </p>
                </div>
                <div class="block botao">
                    <a href="">Anunciar</a>
                </div>
            </div>
            <div class="plano well big">
                <div class="block title">
                    <img src="../img/icons/economico.png">
                    <h3>Econômico</h3>
                    <p>Para quem está começando agora</p>
                </div>
                <div class="block">
                    <h4>4</h4>
                    <p>mini-fotos no resultado da busca</p>
                </div>
                <div class="block">
                    <h4>3ª</h4>
                    <p>prioridade nos resultados da busca</p>
                </div>
                <div class="block">
                    <p class="preco mini">
                        <br>
                        <span>GRÁTIS</span><br>
                        * tempo limitado
                    </p>
                </div>
                <div class="block botao">
                    <a href="">Anunciar</a>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <p class="info-anuncio">
            *Atenção: o anúncio Até Vender - Prioridade Máxima precisa ser ativado, gratuitamente, a cada 60 dias. <br>
            - Valores vigentes em 29/01/2015, válidos somente para anunciantes residentes na cidade de Rio do Sul – SC, passíveis de alteração pela WebMotors sem comunicação prévia. <br>
            - O seu anúncio será publicado de acordo com o UF do seu cadastro pessoal. <br>
            - Para receber interesses de compra adequados é importante que você preencha o CEP corretamente. <br>
            - Adesão ao anúncio grátis, quando disponível na região, está limitada a um anúncio por usuário a cada 180 dias. <br>
            - As prioridades são válidas para a ordenação do resultado de busca; entretanto, elas podem ser alteradas pelo usuário a partir de diversos critérios, tais como preço, quilometragem ou ano do veículo. <br>
            - Pagamento parcelado em até 3 vezes sem juros nos cartões Mastercard, Visa, American Express e Diners e pelo celular Oi (Paggo).
        </p>
        <div class="clearfix"></div>
    </form>
@stop