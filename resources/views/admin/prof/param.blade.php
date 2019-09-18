@extends('layouts.datatable')
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
										<a href="{{url('admin/enseignant/show')}}">A propos</a></center>
									</li>
									
									
								</ul>
							</div>
							<div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										 <center><a href="{{url('admin/enseignant/param')}}" class="active" >Paramètres </a></center>
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
<div class="container">
	<div class="row">
		<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">informations personnelles</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Personal Account Settings Form -->
					
						<form>
						<div class="row">
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Nom</label>
									<input class="form-control" placeholder="" type="text" value="le Nom">
								</div>
					
								<div class="form-group label-floating">
									<label class="control-label">Email</label>
									<input class="form-control" placeholder="" type="email" value="jspiegel@yourmail.com">
								</div>
					
								<div class="form-group label-floating is-empty">
									<label class="control-label">Numéro de téléphone</label>
									<input class="form-control" placeholder="" type="text">
								</div>
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Prénom</label>
									<input class="form-control" placeholder="" type="text" value="le prenom	">
								</div>
					
								<div class="form-group date-time-picker label-floating">
									<label class="control-label">Date de naissance</label>
									<input name="datetimepicker" value="10/24/1984" />
									<span class="input-group-addon">
															<svg class="olymp-month-calendar-icon icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-month-calendar-icon"></use></svg>
														</span>
								</div>
					
					
								<div>
									
									<input type="file">
								</div>

							</div>
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Ecrire une petite description de vous</label>
									<textarea class="form-control" placeholder="">Hi, I’m James, I’m 36 and I work as a Digital Designer for the  “Daydreams” Agency in Pier 56</textarea>
								</div>
							</div>	
					
							
							
							
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group with-icon label-floating">
									<label class="control-label">Votre compte Facebook</label>
									<input class="form-control" type="text" value="www.facebook.com/james-spiegel95321">
									<i class="fab fa-facebook-f c-facebook" aria-hidden="true"></i>
								</div>
								<div class="form-group with-icon label-floating">
									<label class="control-label">Votre compte Twitter</label>
									<input class="form-control" type="text" value="www.twitter.com/james_spiegelOK">
									<i class="fab fa-twitter c-twitter" aria-hidden="true"></i>
								</div>
								<div class="form-group with-icon label-floating is-empty">
									<label class="control-label">Votre compte Gmail </label>
									<input class="form-control" type="text">
									<i class="fab fa-google-plus-g" style="color: #D44638"></i>
								</div>
								
								
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<button class="btn btn-secondary btn-lg full-width">Restorer tout les champs</button>
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<button class="btn btn-primary btn-lg full-width">Enregistrer toutes les modifications</button>
							</div>
					
						</div>
					</form>
					
					<!-- ... end Personal Account Settings Form  -->

				</div>
			</div>
		</div>

		<div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12  responsive-display-none">
			<div class="ui-block">

				
				
				<!-- Your Profile  -->
				
				<div class="your-profile">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Votre profil</h6>
					</div>
				
					<div id="accordion" role="tablist" aria-multiselectable="true">
						<div class="card">
							<div class="card-header" role="tab" id="headingOne">
								<h6 class="mb-0">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Paramètres du profil
										<svg class="olymp-dropdown-arrow-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
									</a>
								</h6>
							</div>
				
							<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
								<ul class="your-profile-menu">
									<li>
										<a href="{{url('admin/enseignant/param')}}">Informations personelles</a>
									</li>
									<!-- <li>
										<a href="29-YourAccount-AccountSettings.html">Paramètres du compte</a>
									</li> -->
									<li>
										<a href="{{url('admin/enseignant/password')}}">Changer le mot de passe</a>
									</li>
									<li>
										<a href="{{url('admin/enseignant/competence')}}">Education et emploi</a>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<!-- ... end Your Profile  -->
				

			</div>
		</div>
	</div>
</div>
</div>

<!-- endcontainer -->
@endsection