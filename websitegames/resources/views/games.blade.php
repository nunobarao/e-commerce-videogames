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
					<h6><strong>EG</strong> > <strong>Games</strong></h6>
				</div>

				<div class="container-banner">
					<img src="../imagens/gameBanners/ironMan3.png">
				</div>
				<!--Container opcoes-->
				<!--
				<div class="container-opcoes">
					<div class="inner-container-opcoes">
					<div class="opcao">
						<div class="container-titulo-opcao">
							<div class="titulo-opcao">
								Platform
							</div>
						</div>
						<img class="arrow-opcoes" src="imagens/arrow.png";>
					</div>
					<div class="opcao">
						<div class="container-titulo-opcao">
							<div class="titulo-opcao">
								Genre
							</div>
						</div>
						<img class="arrow-opcoes" src="imagens/arrow.png";>
					</div>
					<div class="opcao">
						<div class="container-titulo-opcao">
							<div class="titulo-opcao">
								Release date
							</div>
						</div>
						<img class="arrow-opcoes" src="imagens/arrow.png";>
					</div>
					<div class="opcao">
						<div class="container-titulo-opcao">
							<div class="titulo-opcao">
								More
							</div>
						</div>
						<img class="arrow-opcoes" src="imagens/arrow.png";>
					</div>
					<div class="clear"></div>
				</div>
					
				</div>-->
				<!--Header Texto-->
				<!-- Container Jogos-->
				<div class="container-jogos">
					<div class="container-jogos-navbar">
						<ul class="jogos-navbar">
		                    <li><a href="{{ url('/games') }}">Most Popular</a></li>
							<li><a href="{{ url('/games') }}">New Releases</a></li>
							<div class="clear"></div>
		                </ul>
					</div>
					<div class="inner-container-jogos">
						<div class="count-jogos">
							All Games ({{ $games->count() }})
						</div>
						@foreach($games as $game)
							<a href="{{ '/games/' . str_replace(' ','-', $game->title) }}"> <!--Estou a usar str_replace() para mudar os espaços por '-'
																			 para no url não apareçer aqueles simbolos de percentagem ex: %02 -->
								<div class="capa-jogo">
									<img src='{{ $game->thumbUrl }}' width="100%">
									<div class="titulo-jogo">
										{{ $game->title }}
									</div>
									<div class="price-jogo">
										€{{ $game->price }}
									</div>
								</div>
							</a>
						@endforeach
						<div class="clear"></div>
					</div>
					<div class="mais-jogos" onclick="loadMoreGamesToList()">
						More
					</div>
				</div>
			</div>
		</div>
		@include('footer')
	</div>
@endsection