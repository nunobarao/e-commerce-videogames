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
					<h6><strong>EG</strong> > <strong>Contact</strong></h6>
				</div>

				

				<div class="container-about">
					<div class="inner-container-about">
						<div class="inner-container-about-title">
							<h1>Contact Us</h1>
						</div>
						<div class="inner-container-about-text">
							<p>Jobs/Hiring: Visit the <a href="#">Work at Experimental Games</a> section of the website.<br /><br />

								For all issues related to EG's games or technical support, please visit the <a href="#">Steam Support</a> Site.<br /><br />


								Postal address:<br />
								Some Address line 1<br />
								Some Address line 2<br />

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