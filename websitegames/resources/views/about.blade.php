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
					<h6><strong>EG</strong> > <strong>About</strong></h6>
				</div>

				<div class="container-banner">
					<img src="../imagens/about.png">
				</div>

				<div class="container-about">
					<div class="inner-container-about">
						<div class="inner-container-about-title">
							<h1>About Us</h1>
						</div>
						<div class="inner-container-about-text">
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." <br /><br />
							"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<br /><br />
							"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
							</p>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
		@include('footer')
	</div>
@endsection