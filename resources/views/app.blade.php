<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Meu Kart | @yield('title')</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/js/chosen/chosen.min.css') }}" rel="stylesheet">

	<link rel="shortcut icon" type="image/ico" href="{{ asset('favicon.ico') }}"/>

	<!-- Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600" rel="stylesheet" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="wrapper">
		<div class="header-container">
			<div class="header">
				<h1 class="logo">
					<strong>Meu Kart | @yield('title')</strong>
					<a href="" title="Meu Kart | @yield('title')" class="logo">
						<img src="{{ asset('img/logo.png') }}" alt="Meu Kart | @yield('title')" />
					</a>
				</h1>

				<nav class="menu">
					<a class="active" href="" title="{{ trans('menu.comprar') }}">{{ trans('menu.comprar') }}</a>
					<a href="" title="{{ trans('menu.vender') }}">{{ trans('menu.vender') }}</a>
					<a href="" title="{{ trans('menu.atendimento') }}">{{ trans('menu.atendimento') }}</a>
				</nav>

				<a href="" class="access" title="{{ trans('menu.acessar') }}">{{ trans('menu.acessar') }}</a>
			</div>
		</div>

		<div class="content-wrapper">
			@yield('content')
		</div>

		<div class="footer-container">
			<div class="widgets">
				<div class="footer">
					<ul class="links">
						<li class="title">Institucional</li>
						<li><a href="">Quem somos</a></li>
						<li><a href="">Política de privacidade</a></li>
						<li><a href="">Termos de uso</a></li>
						<li><a href="">Código de defesa do consumidos</a></li>
					</ul>
					<ul class="links">
						<li class="title">Mapa do site</li>
						<li><a href="">Comprar</a></li>
						<li><a href="">Vender</a></li>
						<li><a href="">Atendimento</a></li>
					</ul>
					<ul class="links">
						<li class="title">Atendimento</li>
						<li><a href="">Fale conosco</a></li>
						<li><a href="">Dúvidas gerais</a></li>
						<li><a href="">Como comprar seu kart</a></li>
						<li><a href="">Como vender seu kart</a></li>
						<li><a href="">Anúncios para pessoa jurídica</a></li>
					</ul>
					<div class="social">
						<div class="fb-page" data-href="https://www.facebook.com/webmotors" data-width="420" data-height="210" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
							<div class="fb-xfbml-parse-ignore">
								<blockquote cite="https://www.facebook.com/webmotors">
									<a href="https://www.facebook.com/webmotors">WebMotors</a>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="advice">
				<div class="footer">
					O anunciante é o único responsável pelas transações comerciais realizadas com os usuários do MeuKart. A comercialização do produto anunciado, bem como a garantia de sua legítima procedência, é de inteira responsabilidade do anunciante. O MeuKart não se responsabiliza por quaisquer danos diretos ou indiretos causados a terceiros, advindos da exibição dos anúncios em desacordo com o Código de Defesa do Consumidor e outras legislações aplicáveis ao comércio e/ou presteção de serviços por parte do anunciante.
				</div>
			</div>
			<div class="copyright">
				<div class="footer">
					© 2015 MEUKART - Todos direitos reservados. 
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="{{ asset('js/jquery/dist/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/chosen/chosen.jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

	<!--Start of Zopim Live Chat Script-->
	<script type="text/javascript">
		window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
		d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
		_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
		$.src="//v2.zopim.com/?31ratShXbMmFn47qMdWfRvx7YptvYR2N";z.t=+new Date;$.
		type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
	</script>
	<!--End of Zopim Live Chat Script-->

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3&appId=460126244056516";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
</body>
</html>
