@extends('layouts.navBar')

@section('content')
	<div class="loader">
		<img id="loader-image" src="../imagens/loader.gif" onload="loadImg('../imagens/fundoPadrao.png');">
		<!--<p id="loader-text">Loading...</p>-->
	</div>
	<div class="imagemDeFundo one" > 
		<div class="container"> 
			<div class="content"> 
            	<div class="pageTitle">
					<h6><strong>EG</strong> > <strong>News</strong></h6>
				</div>
            	<div class="container-noticias">
            		<div class="inner-container-noticias">
            			<div class="noticia">
            				<img src='../imagens/news/noticia1.png' width="100%">
							<div class="container-titulo-noticia">
								<div class="data-noticia">
									Afixado em 13/05/2014
								</div>
								<div class="titulo-noticia">
									SNIPER 2 New release ! 
								</div>
								<div class="texto-noticia">
									A Experimental Games Inc. anunciou hoje que o jogo SNIPER 2 traz Inovação em Campo de batalha no gameplay, ajuda os fãs a Competir em Nível Elevado com SNIPER Trainer, e traz Novas Formas de Jogar, apresentando niveis e personagens novos. No coração de SNIPER 2, caraterísticas inovadoras de gameplay* vão traduzir-se numa experiência de batalha equilibrada, autêntica e entusiasmante que deixa os fãs jogarem à sua maneira. O novo trailer #DontBePussy pode ser visto <a href="#">aqui</a>.
								</div>
								<div class="link-noticia">
									<a href="#">Ler Mais</a>
								</div>
							</div>
            			</div>
            			<div class="noticia">
            				<img src='../imagens/news/noticia2.png' width="100%">
							<div class="container-titulo-noticia">
								<div class="data-noticia">
									Afixado em 7/02/2014
								</div>
								<div class="titulo-noticia">
									IRON MAN 3 New release ! 
								</div>
								<div class="texto-noticia">
									A Experimental Games Inc. anunciou hoje que o jogo IRON MAN 3 traz Inovação em Campo de batalha no gameplay, ajuda os fãs a Competir em Nível Elevado com IRON MAN Trainer, e traz Novas Formas de Jogar, apresentando niveis e personagens novos. No coração de IRON MAN 3, caraterísticas inovadoras de gameplay* vão traduzir-se numa experiência de batalha equilibrada, autêntica e entusiasmante que deixa os fãs jogarem à sua maneira. O novo trailer #WeAreMadeOfIron pode ser visto <a href="#">aqui</a>.
								</div>
								<div class="link-noticia">
									<a href="#">Ler Mais</a>
								</div>
							</div>
            			</div>
            			<div class="noticia">
            				<img src='../imagens/news/noticia3.png' width="100%">
							<div class="container-titulo-noticia">
								<div class="data-noticia">
									Afixado em 16/07/2015
								</div>
								<div class="titulo-noticia">
									COOKING FEVER New 100 levels to play! 
								</div>
								<div class="texto-noticia">
									A Experimental Games Inc. anunciou hoje que o jogo COOKING FEVER traz Inovação em Campo de batalha no gameplay, ajuda os fãs a Competir em Nível Elevado com COOKING FEVER Trainer, e traz Novas Formas de Jogar, apresentando niveis e personagens novos. No coração de COOKING FEVER, caraterísticas inovadoras de gameplay* vão traduzir-se numa experiência de batalha equilibrada, autêntica e entusiasmante que deixa os fãs jogarem à sua maneira. O novo trailer #CookTheFever pode ser visto <a href="#">aqui</a>.
								</div>
								<div class="link-noticia">
									<a href="#">Ler Mais</a>
								</div>
							</div>
            			</div>
            		</div>
            		<div class="noticias-aside">
	            		<div class="inner-container-noticias-aside">
	            			"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
	            		</div>
            		</div>
            		<div class="clear"></div>
            	</div>
			</div>
		</div>
		@include('footer')
	</div>
@endsection