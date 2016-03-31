@extends('layouts.navBar')

@section('content')
	<div class="loader">
		<img id="loader-image" src="../imagens/loader.gif" onload="loadImg('../imagens/imagemDeFundo1.jpg');">
		<!--<p id="loader-text">Loading...</p>-->
	</div>
	<div class="imagemDeFundo one" > 
		<div class="container">
			<div class="content">
				<div class="title"></div>
				<div class="newgame">
					<div class="newgame-message-top">
						New release<br /> download and play!
					</div>
					<div class="newgame-message-bottom">
						Play now 100 new levels that we have prepared for you with new characters and more fun!
					</div>
					<!-- Download Button -->
					<a class="newgame-message-button" href="{{ url('/') }}">
						Download
					</a>
				</div>
			</div>
		</div>
		@include('footer')
	</div>
@endsection
