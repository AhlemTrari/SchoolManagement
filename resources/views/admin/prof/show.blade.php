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
										<a href="#act" data-toggle="tab" class="active">A propos</a></center>
									</li>
									
									
								</ul>
							</div>
							<div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										 <center><a href="#act1" data-toggle="tab" >Paramètres </a></center>
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
							<span class="title">About Me:</span>
							<span class="text">Hi, I’m James, I’m 36 and I work as a Digital Designer for the
							“Daydreams” Agency in Pier 56
							</span>
						</li>
						<li>
							<span class="title">Birthday:</span>
							<span class="text">December 14th, 1980</span>
						</li>
						<li>
							<span class="title">Birthplace:</span>
							<span class="text">Austin, Texas, USA</span>
						</li>
						<li>
							<span class="title">Lives in:</span>
							<span class="text">San Francisco, California, USA</span>
						</li>
						<li>
							<span class="title">Occupation:</span>
							<span class="text">UI/UX Designer</span>
						</li>
						<li>
							<span class="title">Joined:</span>
							<span class="text">April 31st, 2014</span>
						</li>
						<li>
							<span class="title">Gender:</span>
							<span class="text">Male</span>
						</li>
						<li>
							<span class="title">Status:</span>
							<span class="text">Married</span>
						</li>
						<li>
							<span class="title">Email:</span>
							<a href="#" class="text">jspiegel@yourmail.com</a>
						</li>
						<li>
							<span class="title">Website:</span>
							<a href="#" class="text">daydreamsagency.com</a>
						</li>
						<li>
							<span class="title">Phone Number:</span>
							<span class="text">(044) 555 - 4369 - 8957</span>
						</li>
						<li>
							<span class="title">Religious Belifs:</span>
							<span class="text">-</span>
						</li>
						<li>
							<span class="title">Political Incline:</span>
							<span class="text">Democrat</span>
						</li>
					</ul>
					
					<!-- ... end W-Personal-Info -->
					<!-- W-Socials -->
					
					<div class="widget w-socials">
						<h6 class="title">Other Social Networks:</h6>
						<a href="#" class="social-item bg-facebook">
							<i class="fab fa-facebook-f" aria-hidden="true"></i>
							Facebook
						</a>
						<a href="#" class="social-item bg-twitter">
							<i class="fab fa-twitter" aria-hidden="true"></i>
							Twitter
						</a>
						<a href="#" class="social-item bg-dribbble">
							<i class="fab fa-dribbble" aria-hidden="true"></i>
							Dribbble
						</a>
					</div>
					
					
					<!-- ... end W-Socials -->
				</div>
			</div>
	</main>
	<aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Mes Groupes</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Pool -->
					
					<ul class="widget w-pool">
						<li>
							<p>If you had to choose, which actor do you prefer to be the next Darkman? </p>
						</li>
						<li>
							<div class="skills-item">
								<div class="skills-item-info">
									<span class="skills-item-title">
										<span class="radio">
											<label>
												<input type="radio" name="optionsRadios">
												Thomas Bale
											</label>
										</span>
									</span>
									<span class="skills-item-count">
										<span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="62" data-from="0"></span>
										<span class="units">62%</span>
									</span>
								</div>
								<div class="skills-item-meter">
									<span class="skills-item-meter-active bg-primary" style="width: 62%"></span>
								</div>
					
								<div class="counter-friends">12 friends voted for this</div>
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="img/friend-harmonic1.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic2.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic3.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic4.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic5.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic6.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic8.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic9.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#" class="all-users">+3</a>
									</li>
								</ul>
							</div>
						</li>
					
						<li>
							<div class="skills-item">
								<div class="skills-item-info">
									<span class="skills-item-title">
										<span class="radio">
											<label>
												<input type="radio" name="optionsRadios">
												Ben Robertson
											</label>
										</span>
									</span>
									<span class="skills-item-count">
										<span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="27" data-from="0"></span>
										<span class="units">27%</span>
									</span>
								</div>
								<div class="skills-item-meter">
									<span class="skills-item-meter-active bg-primary" style="width: 27%"></span>
								</div>
								<div class="counter-friends">7 friends voted for this</div>
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic8.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic9.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic10.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic11.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic12.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic13.jpg" alt="friend">
										</a>
									</li>
								</ul>
							</div>
						</li>
					
						<li>
							<div class="skills-item">
								<div class="skills-item-info">
									<span class="skills-item-title">
										<span class="radio">
											<label>
												<input type="radio" name="optionsRadios">
												Michael Streiton
											</label>
										</span>
									</span>
									<span class="skills-item-count">
										<span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="11" data-from="0"></span>
										<span class="units">11%</span>
									</span>
								</div>
								<div class="skills-item-meter">
									<span class="skills-item-meter-active bg-primary" style="width: 11%"></span>
								</div>
					
								<div class="counter-friends">2 people voted for this</div>
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="img/friend-harmonic14.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic15.jpg" alt="friend">
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
					
					<!-- .. end W-Pool -->
					<a href="#" class="btn btn-md-2 btn-border-think custom-color c-grey full-width">Vote Now!</a>
				</div>
			</div>

	</aside>

</div>


<!-- endcontainer -->
@endsection