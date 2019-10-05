@extends('layouts.prof')
@section('content')
<div class="row">
	<div class="col col-xl-8  col-lg-8  col-md-8 col-sm-8 col-8">
		<div class="ui-block">
			<div class="ui-block-title">
				<h6 class="title">
					<div class="row">

						<div class="col-6">
						<p class="text-left">Groupe: {{$groupe->nom}}</p>
						</div>

						<div class="col-6">
						<p class="text-left">Module: @foreach( $groupe->modules as $module) {{$module->Libelle}} @endforeach</p>
						</div>

					</div>
				</h6>
			</div>

		</div>
			<div class="ui-block-content">
						
				<ul class="nav nav-pills nav-fill">

		            <li class="nav-item">
		                <a href="#etudiant" data-toggle="tab" aria-expanded="false" class="nav-link active">
		                   Liste des étudiants
		                </a>
		            </li>
		            <li class="nav-item">
		                <a href="#presence" data-toggle="tab" aria-expanded="false" class="nav-link">
		                   Présence
		                </a>
		            </li>

		              <li class="nav-item">
		                <a href="#historique" data-toggle="tab" aria-expanded="true" class="nav-link ">
		                    Historique
		                </a>
		              </li>

		              <li class="nav-item">
		                <a href="#exclus" data-toggle="tab" aria-expanded="true" class="nav-link ">
		                    Liste des exclus
		                </a>
		              </li>
		        </ul>
		        <br><br>
		        <div class="tab-content">

		            <div class="tab-pane fade show active" id="etudiant">
		              <div class="">
		              	<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
			                <thead>
			                    <tr>
			                        <th>Matricule</th>
			                        <th>Nom</th>
			                        <th>Prénom</th>
			                        <th>Date de naissance</th>
			                    </tr>
			                </thead>
			                <tbody>
			                	@foreach($groupe->etudiants as $etu)
			                    <tr>
			                        <td>{{$etu->matricule}}</td>
			                        <td>{{$etu->nom}}</td>
			                        <td>{{$etu->prenom}}</td>
			                        <td>{{$etu->date_naissance}}</td>
			                    </tr>

			                	@endforeach
			            	</tbody>
			        	</table>
		              </div>
		            </div>

		            <div class="tab-pane" id="presence">
		            	<div class="u">
            				<form method="POST" action="{{url('enseignant/groupe/presence')}}" class="comment-form inline-item">
            					{{ csrf_field() }}
			            		<table id="datatable-buttons" class="table">
					                <thead>
					                    <tr>
					                        <th>Etudiant</th>
					                        <th>Présent</th>
					                        <th>Absent</th>
					                    </tr>
					                </thead>
					                <tbody>
					                	@foreach($groupe->etudiants as $etu)
					                    <tr>
					                        <td>{{$etu->nom}} {{$etu->prenom}}
												<input name="etudient_id[]" type="hidden" value="{{$etu->id}}">
												<input name="seance_id" type="hidden" value="1">
											</td>
					                        <td><div class="checkbox">
													<label>
														<input type="checkbox" name="presence[]" value="P">
													</label>
												</div>
											</td>
											<td><div class="checkbox">
													<label>
														<input type="checkbox" name="presence[]" value="A">
													</label>
												</div>
											</td>
					                    </tr>

					                	@endforeach
						            </tbody>
						        </table>
			            		<button type="submit" class=" btn btn-md-2 btn-primary"><i class="fa fa-check"></i> Valider<div class="ripple-container"></div></button>
	        				</form>

		            	</div>
		            </div>
		             

		            <div class="tab-pane " id="historique">
		              CCC
		     		 </div>

		     		 <div class="tab-pane " id="exclus">
		              CCC
		     		 </div>

		        </div>

							
		    </div>
	</div>		
		<div class="col col-xl-4  col-lg-4  col-md-4 col-sm-4 col-4">
			<div class="ui-block">				
				<!-- W-Calendar -->				
				<div class="w-calendar calendar-container">
					<div class="calendar">
						<header>
							<h6 class="month">March 2017</h6>
							<a class="calendar-btn-prev fas fa-angle-left" href="#"></a>
							<a class="calendar-btn-next fas fa-angle-right" href="#"></a>
						</header>
						<table>
							<thead>
							<tr><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td><td>San</td></tr>
							</thead>
							<tbody>
							<tr>
								<td data-month="12" data-day="1">1</td>
								<td data-month="12" data-day="2" class="event-uncomplited event-complited">
									2
								</td>
								<td data-month="12" data-day="3">3</td>
								<td data-month="12" data-day="4">4</td>
								<td data-month="12" data-day="5">5</td>
								<td data-month="12" data-day="6">6</td>
								<td data-month="12" data-day="7">7</td>
							</tr>
							<tr>
								<td data-month="12" data-day="8">8</td>
								<td data-month="12" data-day="9">9</td>
								<td data-month="12" data-day="10" class="event-complited">10</td>
								<td data-month="12" data-day="11">11</td>
								<td data-month="12" data-day="12">12</td>
								<td data-month="12" data-day="13">13</td>
								<td data-month="12" data-day="14">14</td>
							</tr>
							<tr>
								<td data-month="12" data-day="15" class="event-complited-2">15</td>
								<td data-month="12" data-day="16">16</td>
								<td data-month="12" data-day="17">17</td>
								<td data-month="12" data-day="18">18</td>
								<td data-month="12" data-day="19">19</td>
								<td data-month="12" data-day="20">20</td>
								<td data-month="12" data-day="21">21</td>
							</tr>
							<tr>
								<td data-month="12" data-day="22">22</td>
								<td data-month="12" data-day="23">23</td>
								<td data-month="12" data-day="24">24</td>
								<td data-month="12" data-day="25">25</td>
								<td data-month="12" data-day="26">26</td>
								<td data-month="12" data-day="27">27</td>
								<td data-month="12" data-day="28" class="event-uncomplited">28</td>
							</tr>
							<tr>
								<td data-month="12" data-day="29">29</td>
								<td data-month="12" data-day="30">30</td>
								<td data-month="12" data-day="31">31</td>
							</tr>
							</tbody>
						</table>
						<div class="list">
				
							<div id="accordion-1" role="tablist" aria-multiselectable="true" class="day-event" data-month="12" data-day="2">
								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">TODAY’S EVENTS</h6>
								</div>
								<div class="card">
									<div class="card-header" role="tab" id="headingOne-1">
										<div class="event-time">
											<span class="circle"></span>
											<time datetime="2004-07-24T18:18">9:00am</time>
											<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
										</div>
										<h5 class="mb-0">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-1" aria-expanded="true" aria-controls="collapseOne-1">
												Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
											</a>
										</h5>
									</div>
				
									<div id="collapseOne-1" class="collapse" role="tabpanel" >
										<div class="card-body">
											Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
										</div>
										<div class="place inline-items">
											<svg class="olymp-add-a-place-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-add-a-place-icon"></use></svg>
											<span>Daydreamz Agency</span>
										</div>
				
										<ul class="friends-harmonic inline-items">
											<li>
												<a href="#">
													<img src="img/friend-harmonic5.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic10.jpg" alt="friend">
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
													<img src="img/friend-harmonic2.jpg" alt="friend">
												</a>
											</li>
											<li class="with-text">
												Will Assist
											</li>
										</ul>
									</div>
								</div>
				
								<div class="card">
									<div class="card-header" role="tab" id="headingTwo-1">
										<div class="event-time">
											<span class="circle"></span>
											<time datetime="2004-07-24T18:18">9:00am</time>
											<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
										</div>
										<h5 class="mb-0">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo-1" aria-expanded="true" aria-controls="collapseTwo-1">
												Send the new “Olympus” project files to the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
											</a>
										</h5>
									</div>
				
									<div id="collapseTwo-1" class="collapse" role="tabpanel">
										<div class="card-body">
											Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
										</div>
									</div>
				
								</div>
				
								<div class="card">
									<div class="card-header" role="tab" id="headingThree-1">
										<div class="event-time">
											<span class="circle"></span>
											<time datetime="2004-07-24T18:18">6:30am</time>
											<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
										</div>
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false">
												Take Querty to the Veterinarian
											</a>
										</h5>
									</div>
									<div class="place inline-items">
										<svg class="olymp-add-a-place-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-add-a-place-icon"></use></svg>
										<span>Daydreamz Agency</span>
									</div>
								</div>
				
								<a href="#" class="check-all">Check all your Events</a>
							</div>
				
							<div id="accordion-2" role="tablist" aria-multiselectable="true" class="day-event" data-month="12" data-day="10">
								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">TODAY’S EVENTS</h6>
								</div>
								<div class="card">
									<div class="card-header" role="tab" id="headingOne-2">
										<div class="event-time">
											<span class="circle"></span>
											<time datetime="2004-07-24T18:18">9:00am</time>
											<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
										</div>
										<h5 class="mb-0">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2">
												Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
											</a>
										</h5>
									</div>
				
									<div id="collapseOne-2" class="collapse" role="tabpanel">
										<div class="card-body">
											Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
										</div>
										<div class="place inline-items">
											<svg class="olymp-add-a-place-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-add-a-place-icon"></use></svg>
											<span>Daydreamz Agency</span>
										</div>
				
										<ul class="friends-harmonic inline-items">
											<li>
												<a href="#">
													<img src="img/friend-harmonic5.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic10.jpg" alt="friend">
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
													<img src="img/friend-harmonic2.jpg" alt="friend">
												</a>
											</li>
											<li class="with-text">
												Will Assist
											</li>
										</ul>
									</div>
				
								</div>
				
								<a href="#" class="check-all">Check all your Events</a>
							</div>
				
							<div id="accordion-3" role="tablist" aria-multiselectable="true" class="day-event" data-month="12" data-day="15">
								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">TODAY’S EVENTS</h6>
								</div>
								<div class="card">
									<div class="card-header" role="tab" id="headingOne-3">
										<div class="event-time">
											<span class="circle"></span>
											<time datetime="2004-07-24T18:18">9:00am</time>
											<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
										</div>
										<h5 class="mb-0">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-3" aria-expanded="true" aria-controls="collapseOne-3">
												Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
											</a>
										</h5>
									</div>
				
									<div id="collapseOne-3" class="collapse" role="tabpanel">
										<div class="card-body">
											Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
										</div>
				
										<div class="place inline-items">
											<svg class="olymp-add-a-place-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-add-a-place-icon"></use></svg>
											<span>Daydreamz Agency</span>
										</div>
				
										<ul class="friends-harmonic inline-items">
											<li>
												<a href="#">
													<img src="img/friend-harmonic5.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic10.jpg" alt="friend">
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
													<img src="img/friend-harmonic2.jpg" alt="friend">
												</a>
											</li>
											<li class="with-text">
												Will Assist
											</li>
										</ul>
									</div>
				
								</div>
				
								<div class="card">
									<div class="card-header" role="tab" id="headingTwo-3">
										<div class="event-time">
											<span class="circle"></span>
											<time datetime="2004-07-24T18:18">12:00pm</time>
											<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
										</div>
										<h5 class="mb-0">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo-3" aria-expanded="true" aria-controls="collapseTwo-3">
												Send the new “Olympus” project files to the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
											</a>
										</h5>
									</div>
				
									<div id="collapseTwo-3" class="collapse" role="tabpanel" >
										<div class="card-body">
											Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
										</div>
									</div>
				
								</div>
				
								<div class="card">
									<div class="card-header" role="tab" id="headingThree-3">
										<div class="event-time">
											<span class="circle"></span>
											<time datetime="2004-07-24T18:18">6:30pm</time>
											<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
										</div>
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false">
												Take Querty to the Veterinarian
											</a>
										</h5>
									</div>
									<div class="place inline-items">
										<svg class="olymp-add-a-place-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-add-a-place-icon"></use></svg>
										<span>Daydreamz Agency</span>
									</div>
								</div>
				
								<a href="#" class="check-all">Check all your Events</a>
							</div>
				
							<div id="accordion-4" role="tablist" aria-multiselectable="true" class="day-event" data-month="12" data-day="28">
								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">TODAY’S EVENTS</h6>
								</div>
								<div class="card">
									<div class="card-header" role="tab" id="headingOne-4">
										<div class="event-time">
											<span class="circle"></span>
											<time datetime="2004-07-24T18:18">9:00am</time>
											<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
										</div>
										<h5 class="mb-0">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-4" aria-expanded="true" aria-controls="collapseOne-4">
												Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
											</a>
										</h5>
									</div>
				
									<div id="collapseOne-4" class="collapse" role="tabpanel" aria-labelledby="headingOne-4">
										<div class="card-body">
											Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
										</div>
										<div class="place inline-items">
											<svg class="olymp-add-a-place-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-add-a-place-icon"></use></svg>
											<span>Daydreamz Agency</span>
										</div>
				
										<ul class="friends-harmonic inline-items">
											<li>
												<a href="#">
													<img src="img/friend-harmonic5.jpg" alt="friend">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="img/friend-harmonic10.jpg" alt="friend">
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
													<img src="img/friend-harmonic2.jpg" alt="friend">
												</a>
											</li>
											<li class="with-text">
												Will Assist
											</li>
										</ul>
									</div>
				
								</div>
				
								<a href="#" class="check-all">Check all your Events</a>
							</div>
				
						</div>
					</div>
				</div>				
				<!-- ... end W-Calendar -->			
			</div>			
		</div>
		<div class="col col-xl-8  col-lg-8  col-md-8 col-sm-8 col-8">
		</div>
		<div class="col col-xl-4  col-lg-4  col-md-4 col-sm-4 col-4">


			<div class="ui-block">
				<div class="ui-block-title">
					<center><h6 class="title">Mes Groupes</h6></center>
				</div>

				<!-- W-Friend-Pages-Added -->
				
				<ul class="widget w-friend-pages-added notification-list friend-requests">
					<li class="inline-items">
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">groupe A5</a>
							<span class="chat-message-item">Module</span>
						</div>				
					</li>				
				</ul>
				
				<!-- .. end W-Friend-Pages-Added -->
			</div>

			<div class="ui-block">

				<div class="ui-block-title">
					<center><h6 class="title">Travail à éffectuer</h6></center>
					
				</div>

				
				<!-- W-Activity-Feed -->
				
				<ul class="widget w-activity-feed notification-list">				
					<li>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">correction d'un paquet </a> 
							<span class="notification-date">avant le 21/01</time></span>
						</div>
					</li>				
				</ul>				
				<!-- .. end W-Activity-Feed -->
			</div>

		</div>
</div>
@endsection
