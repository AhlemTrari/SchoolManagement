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
										<a href="{{url('admin/show')}}">A propos</a></center>
									</li>
									
									
								</ul>
							</div>
							<div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										 <center><a href="{{url('param')}}" class="active" >Paramètres </a></center>
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
<!-- <div class="profile-settings-responsive">

	<a href="#" class="js-profile-settings-open profile-settings-open">
		<i class="fa fa-angle-right" aria-hidden="true"></i>
		<i class="fa fa-angle-left" aria-hidden="true"></i>
	</a>
	<div class="mCustomScrollbar" data-mcs-theme="dark">
		<div class="ui-block">
			<div class="your-profile">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Your PROFILE</h6>
				</div>

				<div id="accordion1" role="tablist" aria-multiselectable="true">
					<div class="card">
						<div class="card-header" role="tab" id="headingOne-1">
							<h6 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-1" aria-expanded="true" aria-controls="collapseOne">
									Profile Settings
									<svg class="olymp-dropdown-arrow-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
								</a>
							</h6>
						</div>

						<div id="collapseOne-1" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
							<ul class="your-profile-menu">
								<li>
									<a href="28-YourAccount-PersonalInformation.html">Personal Information</a>
								</li>
								<li>
									<a href="29-YourAccount-AccountSettings.html">Account Settings</a>
								</li>
								<li>
									<a href="30-YourAccount-ChangePassword.html">Change Password</a>
								</li>
								<li>
									<a href="31-YourAccount-HobbiesAndInterests.html">Hobbies and Interests</a>
								</li>
								<li>
									<a href="32-YourAccount-EducationAndEmployement.html">Education and Employement</a>
								</li>
							</ul>
						</div>
					</div>
				</div>


				<div class="ui-block-title">
					<a href="33-YourAccount-Notifications.html" class="h6 title">Notifications</a>
					<a href="#" class="items-round-little bg-primary">8</a>
				</div>
				<div class="ui-block-title">
					<a href="34-YourAccount-ChatMessages.html" class="h6 title">Chat / Messages</a>
				</div>
				<div class="ui-block-title">
					<a href="35-YourAccount-FriendsRequests.html" class="h6 title">Friend Requests</a>
					<a href="#" class="items-round-little bg-blue">4</a>
				</div>
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">FAVOURITE PAGE</h6>
				</div>
				<div class="ui-block-title">
					<a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Create Fav Page</a>
				</div>
				<div class="ui-block-title">
					<a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Fav Page Settings</a>
				</div>
			</div>
		</div>
	</div>
</div> -->
<div class="container">
	<div class="row">
		<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Votre histoire d'éducation</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Personal Account Settings Form -->
					<form>
						<div class="row">
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Titre ou Lieu</label>
									<input class="form-control" placeholder="" type="text" value="The New College of Design">
								</div>
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Période</label>
									<input class="form-control" placeholder="" type="text" value="2001 - 2006">
								</div>
							</div>
					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Description</label>
									<textarea class="form-control" placeholder=""  >Bachelor of Interactive Design in the New College. It was a five years intensive career. Average: A+
													</textarea>
								</div>
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Titre ou Lieu</label>
									<input class="form-control" placeholder="" type="text" value="Rembrandt Institute">
								</div>
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Période</label>
									<input class="form-control" placeholder="" type="text" value="2008">
								</div>
							</div>
					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Description</label>
									<textarea class="form-control" placeholder=""  >Five months Digital Illustration course. Professor: Leonardo Stagg.
													</textarea>
								</div>
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Titre ou Lieu</label>
									<input class="form-control" placeholder="" type="text">
								</div>
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Période</label>
									<input class="form-control" placeholder="" type="text">
								</div>
							</div>
					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Description</label>
									<textarea class="form-control" placeholder=""  >
													</textarea>
								</div>
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<button class="btn btn-secondary btn-lg full-width">Annuler</button>
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<button class="btn btn-primary btn-lg full-width">Enregistrer toutes les modifications	</button>
							</div>
						</div>
					</form>
					
					<!-- ... end Personal Account Settings Form  -->

				</div>
			</div>
			<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Votre historique d'emploi</h6>
					</div>
					<div class="ui-block-content">

						
						<!-- Employement History Form -->
						
						<form>
							<div class="row">
								<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									<div class="form-group label-floating">
										<label class="control-label">Titre ou Lieu</label>
										<input class="form-control" placeholder="" type="text" value="Digital Design Intern">
									</div>
								</div>
						
								<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									<div class="form-group label-floating">
										<label class="control-label">Période</label>
										<input class="form-control" placeholder="" type="text" value="2006 - 2008">
									</div>
								</div>
						
								<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="form-group label-floating">
										<label class="control-label">Description</label>
										<textarea class="form-control" placeholder=""  >Digital Design Intern for the “Multimedz” agency. Was in charge of the communication with the clients.
														</textarea>
									</div>
								</div>
						
								<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									<div class="form-group label-floating">
										<label class="control-label">Titre ou Lieu</label>
										<input class="form-control" placeholder="" type="text" value="UI/UX Designer">
									</div>
								</div>
						
								<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									<div class="form-group label-floating">
										<label class="control-label">Période</label>
										<input class="form-control" placeholder="" type="text" value="2008 - 2013">
									</div>
								</div>
						
								<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="form-group label-floating">
										<label class="control-label">Description</label>
										<textarea class="form-control" placeholder=""  >UI/UX Designer for the “Daydreams” agency.
														</textarea>
									</div>
								</div>
						
								<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Titre ou Lieu</label>
										<input class="form-control" placeholder="" type="text">
									</div>
								</div>
						
								<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Période</label>
										<input class="form-control" placeholder="" type="text">
									</div>
								</div>
						
								<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Description</label>
										<textarea class="form-control" placeholder=""  >
														</textarea>
									</div>
						
								</div>
						
								<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									<button class="btn btn-secondary btn-lg full-width">Annuler</button>
								</div>
						
								<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									<button class="btn btn-primary btn-lg full-width">Enregistrer toutes les modifications</button>
								</div>
							</div>
						</form>
						
						<!-- ... end Employement History Form -->
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
										<a href="{{url('param')}}">Informations personelles</a>
									</li>
									<!-- <li>
										<a href="29-YourAccount-AccountSettings.html">Paramètres du compte</a>
									</li> -->
									<li>
										<a href="{{url('password')}}">Changer le mot de passe</a>
									</li>
									<li>
										<a href="{{url('competence')}}">Education et emploi</a>
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