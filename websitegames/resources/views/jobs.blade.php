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
					<h6><strong>EG</strong> > <strong>Jobs</strong></h6>
				</div>
			</div>
		</div>
		@include('footer')
	</div>
@endsection