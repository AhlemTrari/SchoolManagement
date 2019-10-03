@extends('layouts.datatable')
@section('content')
<div class="container">
	<form action="{{url('admin/etudiant/import')}}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-md-4">
				<!-- <a href="{{url('admin/etudiant/export')}}" class="btn btn-lg full-width bg-grey">Exporter en fichier excel<div class="ripple-container"></div></a> -->
			</div>

			<div class="col-md-4">
				<a data-toggle="modal" data-target="#create-friend-group-1" href="#" class="btn btn-breez btn-lg full-width btn-icon-left">Importer un fichier excel<div class="ripple-container"></div></a>
			</div>

			<!-- Window-popup Create Friends Group -->

			<div class="modal fade" id="create-friend-group-1" tabindex="-1" role="dialog" aria-labelledby="create-friend-group-1" aria-hidden="true">
				<div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
					<div class="modal-content">
						<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
							<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
						</a>

						<div class="modal-body">

							<form class="form-group with-button" action="{{url('admin/etudiant/import')}}" method="POST" enctype="multipart/form-data">
								{{ csrf_field() }}

								<fieldset>
									<div class="form-group label-floating is-empty">
										<center>
											<div style="width: 50%" class="file-upload">
												<label for="upload" name="liste_etudiants" class="file-upload__label">Selectionnez un fichier excel</label>
												<input id="upload" name="liste_etudiants" class="file-upload__input" type="file" >
											</div>
										</center> 
									</div>
				                </fieldset>

								<button type="submit" class=" btn btn-blue btn-lg full-width"><i class="fa fa-check"></i> Valider</button> 

							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- ... end Window-popup Create Friends Group -->


			<div class="col-md-4">
				<a href="#" class="btn btn-secondary btn-lg full-width" data-toggle="modal" data-target="#nv_etudiant" href="#">Ajouter étudiant<div class="ripple-container"></div></a>
			</div>
		</div>
	</form>
	<div class="row">
        <div class="col-12">
			<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                <thead>
                    <tr>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de naissance</th>
                        <th>email</th>
						<th>Actions</th>

                    </tr>
                </thead>
                <tbody>
                	@foreach($etudiants as $etu)
                    <tr>
                        <td>{{$etu->matricule}}</td>
                        <td>{{$etu->nom}}</td>
                        <td>{{$etu->prenom}}</td>
                        <td>{{$etu->date_naissance}}</td>
                        <td>{{$etu->email}}</td>
						<td>
						<center>
                                      
                            <form action="{{ url('admin/etudiant/'.$etu->id)}}" method="post">
                            	<div class="row">
                            		
	                            	<!-- editer étudiant -->
		                         	<a href="#edit{{ $etu->id }}Modal" class="btn btn-control bg-breez" data-toggle="modal" style="height:40px; width: 40px"><i class="fas fa-user-edit"></i></a>

		                         	<div class="modal fade" id="edit{{ $etu->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="edit{{ $etu->id }}Modal" aria-hidden="true">
										<div class="modal-dialog window-popup edit-my-poll-popup" role="document">
											<div class="modal-content">
												<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
													<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
												</a>
												<div class="modal-body">

													<div class="edit-my-poll-head bg-primary">
														<div class="head-content">
															<h2 class="title">Modifier étudiant</h2>
														</div>

														<img class="poll-img" style = "width: 20%" src="{{asset('assets/avatars/etdaj.png')}}" alt="screen">
													</div>

													<div class="edit-my-poll-content">
													
														<form class="resume-form" action="{{ url('admin/etudiant/'.$etu->id)}}">
															<input type="hidden" name="_method" value="PUT">
									            				{{ csrf_field() }}
									            			<fieldset>
																<div class="form-group label-floating is-empty">
																	<label class="control-label">Matricule</label>
																	<input class="form-control" placeholder="" name="matricule" value="{{$etu->matricule}}" type="text">
																</div>
																<div class="form-group label-floating is-empty">
																	<label class="control-label">Nom</label>
																	<input class="form-control" placeholder="" name="nom" value="{{$etu->nom}}" type="text">
																</div>
																<div class="form-group label-floating is-empty">
																	<label class="control-label">Prénom</label>
																	<input class="form-control" placeholder="" name="prenom" value="{{$etu->prenom}}" type="text">
																</div>
																<div class="form-group date-time-picker label-floating is-empty">
																	<label class="control-label">Date de naissance</label>
																	<input type="date" value="{{$etu->date_naissance}}" name="date_naissance"/>
																	<span class="input-group-addon">
																	<svg class="olymp-calendar-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
																	</span>
																</div>
																<div class="form-group label-floating is-empty">
																	<label class="control-label">Email</label>
																	<input class="form-control" name="email" value="{{$etu->email}}" type="email">
																</div>
															</fieldset>
															<div class="row" style="padding-top: 30px; margin-left: 35%;">
														            <button class="close" type="button" data-dismiss="modal" aria-hidden="true"><i class="fa  fa-mail-reply"></i>Annuler &nbsp; &nbsp;
														            </button>
														            <button type="submit" class=" btn btn-lg btn-primary"><i class="fa fa-check"></i> Valider
														            </button> 
													        </div>
														</form>
													</div>

												</div>
											</div>
										</div>
									</div>

									<!-- supprimer étudiant -->
									<a href="#supprimer{{ $etu->id }}Modal" class="btn btn-control bg-orange" data-toggle="modal" style="height:40px; width: 40px"><i class="fas fa-user-times"></i></a>

									<div class="modal fade" id="supprimer{{ $etu->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="supprimer{{ $etu->id }}ModalLabel" aria-hidden="true">
				                      <div class="modal-dialog">
				                          <div class="modal-content">
				                              <div class="modal-body text-center">
				                                  Voulez-vous vraiment effectuer la suppression ? 
				                              </div>
				                              <div class="modal-footer">
				                                  <form class="form-inline" action="{{url('admin/etudiant/'.$etu->id)}}"  method="POST">
				                                      @method('DELETE')
				                                      @csrf
				                                  <button type="button" class="btn btn-light" data-dismiss="modal">Non</button>
				                                      <button type="submit" class="btn btn-danger">Oui</button>
				                                  </form>
				                              </div>
				                          </div>
				                      </div>
									</div>
								</div>

                            </form>
						</center>
						</td>
                    </tr>

                	@endforeach
            	</tbody>
        	</table>
        </div>
    </div>
</div>

<!-- ajouter etudiant -->
<div class="modal fade" id="nv_etudiant" tabindex="-1" role="dialog" aria-labelledby="edit-my-poll-popup" aria-hidden="true">
	<div class="modal-dialog window-popup edit-my-poll-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-body">

				<div class="edit-my-poll-head bg-primary">
					<div class="head-content">
						<h2 class="title">Nouvel étudiant</h2>
					</div>

					<img class="poll-img" style = "width: 20%" src="{{asset('assets/avatars/etdaj.png')}}" alt="screen">
				</div>

				<div class="edit-my-poll-content">
				
					<form class="resume-form" method="POST" action="{{url('admin/etudiant')}}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<fieldset>
							<div class="form-group label-floating is-empty">
								<label class="control-label">Matricule <span class="text-danger">*</span></label>
								<input class="form-control" placeholder="" value="{{old('matricule')}}" type="text" name="matricule" required>
							</div>
							<div class="form-group label-floating is-empty">
								<label class="control-label">Nom <span class="text-danger">*</span></label>
								<input class="form-control" placeholder="" value="{{old('nom')}}" type="text" name="nom" required>
							</div>
							<div class="form-group label-floating is-empty">
								<label class="control-label">Prénom <span class="text-danger">*</span></label>
								<input class="form-control" placeholder="" value="{{old('prenom')}}" type="text" name="prenom" required>
							</div>
							<div class="form-group date-time-picker label-floating is-empty">
								<label class="control-label">Date de naissance</label>
									<input type="date" value="" name="date_naissance"/>
									<span class="input-group-addon">
										<svg class="olymp-calendar-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
									</span>
							</div>
							<div class="form-group label-floating is-empty">
								<label class="control-label">Email  <span class="text-danger">*</span></label>
								<input class="form-control" name="email"  value="" type="email" required>
							</div>
							<div class="form-group label-floating is-empty">
								<label class="control-label">Mot de passe  <span class="text-danger">*</span></label>
								<input class="form-control" type="password" name="password" required>
							</div>
							
						</fieldset>
						<div class="row" style="padding-top: 30px; margin-left: 35%;">
		                  <button class="close" type="button" data-dismiss="modal" aria-hidden="true"><i class="fa  fa-mail-reply"></i>Annuler &nbsp; &nbsp;</button>
		                   <button type="submit" class=" btn btn-lg btn-primary"><i class="fa fa-check"></i> Valider</button> 
		                </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection






 