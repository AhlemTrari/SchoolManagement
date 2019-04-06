@extends('layouts.admin')
@section('page-title','profil')
@section('content')

	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="top-header">
					<div class="top-header-thumb">
						<img src="{{asset('assets/img/bg-section5.png')}}" alt="">
					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col col-lg-5 col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li></li>
									<li><center>
										<a href="{{url('admin/show')}}" class="active">A propos</a></center>
									</li>
									
									
								</ul>
							</div>
							<div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										 <center><a href="{{url('param')}}">Paramètres </a></center>
									</li>
									<li></li>
									
								</ul>
							</div>
						</div>

						<div class="control-block-button">
							<a href="#" class="btn btn-control has-i bg-facebook">
							<i class="fab fa-facebook-f" aria-hidden="true"></i>
							</a>
							<a href="#" class="btn btn-control has-i bg-twitter">
							<i class="fab fa-twitter" aria-hidden="true"></i>
							</a>

							

							<div class="btn btn-control bg-primary more">
								<i style="color: white" class="fab fa-google-plus-g"></i>
							</div>
						</div>
					</div>
					<div class="top-header-author">
						<a href="02-ProfilePage.html" class="author-thumb">
							<img src="{{asset('assets/avatars/profm.png')}}" alt="author">
						</a>
						<div class="author-content">
							<a href="02-ProfilePage.html" class="h4 author-name">Nom prénom</a>
							<div class="country">GRADE</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>


	
<!-- container -->

<div class="row">
	<main class="col col-xl-9 order-xl-2 col-lg-6 order-lg-1 col-md-6 col-sm-12 col-12">
		<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Personal Info</h6>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
				<div class="ui-block-content">

					
					<!-- W-Personal-Info -->
					
					<ul class="widget w-personal-info">
						<li>
							<span class="title">À propos de moi</span>
							<span class="text">Hi, I’m James, I’m 36 and I work as a Digital Designer for the
							“Daydreams” Agency in Pier 56
							</span>
						</li>
						<li>
							<span class="title">Date de naissance</span>
							<span class="text">December 14th, 1980</span>
						</li>
						
						<li>
							<span class="title">Email</span>
							<a href="#" class="text">jspiegel@yourmail.com</a>
						</li>
						<li>
							<span class="title">Numéro de téléphone:</span>
							<span class="text">(044) 555 - 4369 - 8957</span>
						</li>
						
							
					</ul>
					
					<!-- ... end W-Personal-Info -->
				
				</div>
			</div>
	</main>
	<aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Mes Groupes</h6>
				</div>
				<div class="ui-block-content">

				</div>
			</div>

	</aside>

</div>


<!-- endcontainer -->
@endsection