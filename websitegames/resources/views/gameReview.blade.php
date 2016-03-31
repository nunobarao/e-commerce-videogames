@extends('layouts.navBar')

@section('content')
	<div class="loader">
		<img id="loader-image" src="../imagens/loader.gif" onload="loadImg( {{ $gameData }} );">
		<!--<p id="loader-text">Loading...</p>-->
	</div>
	<div class="imagemDeFundo one" > 
		<div class="container">
			<div class="content">
				<div class="pageTitle">
					<h6><strong>EG</strong> > <strong>Games</strong> > <strong>{{ $gameData->title }}</strong></h6>
				</div>
				
				<div class="container-banner">
					<img src="{{ $gameData->bannerUrl }}">
				</div>

				<div class="container-review">
					<div class="inner-container-review">
						<div class="inner-container-review-title">
							<h1>{{ $gameData->title }}</h1>
						</div>
						<div class="inner-container-review-text">
							<p>Dead Space 3 leva Isaac Clarke e um companheiro misterioso numa viagem pelo espaço em busca da origem do surto Necromorph. Depois de uma aterragem forçada no planeta gelado de Tau Volantis, o par deve explorar o ambiente hostil em busca de materiais para construir e peças recuperadas. Depois Isaac irá pôr à prova as suas capacidades de engenharia criando e personalizando armas e ferramentas de sobrevivência. O planeta gelado é fundamental para eliminar a praga Necromorph para sempre, mas primeiro a equipa tem de ultrapassar avalanches, escaladas traiçoeiras no gelo e o violento mundo selvagem. Enfrentando inimigos evoluídos e mais perigosos e a brutalidade dos elementos, o par improvável deve trabalhar em conjunto para salvar a humanidade do apocalipse que se aproxima.</p>
						</div>
						<div class="inner-container-review-details">
							<div class="game-title-img">
								<img src="{{ $gameData->titleUrl }}">
							</div>
							<div class="game-cover-img">
								<img src="{{ $gameData->coverUrl }}">
							</div>
							<div class="game-release-date">
								Released:<br />
								<p>{{ $gameData->year }}</p>
							</div>
							<div class="game-genre">
								Genre:<br />
								<p>{{ $gameData->genre }}</p>
							</div>
							<div class="game-platform">
								Platform:<br />
								<p>{{ $gameData->platform }}<p>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
		@include('footer')
	</div>
	<div class="clear"></div>
@endsection
