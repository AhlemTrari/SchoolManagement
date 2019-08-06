@extends('layouts.datatable')
@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-4">
				<a href="#" class="btn btn-lg full-width bg-grey">Exporter en fichier excel<div class="ripple-container"></div></a>
			</div>
			<div class="col-md-4">
				<a href="#" class="btn btn-breez btn-lg full-width btn-icon-left">Importer un fichier excel<div class="ripple-container"></div></a>
			</div>
			<div class="col-md-4">
				<a href="#" class="btn btn-secondary btn-lg full-width" data-toggle="modal" data-target="#nv_etudiant" href="#">Ajouter étudiant<div class="ripple-container"></div></a>
			</div>
		</div>
		<div class="row">
            <div class="col-12">
				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Matricule</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Filière</th>
                            <th>Niveau</th>
							<th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($etudiants as $etudiant)
                        <tr>
                            <td>{{$etudiant->matricule}}</td>
                            <td>{{$etudiant->nom}}</td>
                            <td>{{$etudiant->prenom}}</td>
                            <td><!-- {{$etudiant->filiere}} --></td>
                            <td><!-- {{$etudiant->niveau}} --></td>
							<th>
							<center>
								<a href="#" class="btn btn-control bg-grey" style="height:40px; width: 40px"><i class="fas fa-user"></i></a>
								<a href="#edit{{ $etudiant->id }}Modal" class="btn btn-control bg-breez" data-toggle="modal" style="height:40px; width: 40px"><i class="fas fa-user-edit"></i></a>
								<a href="#supprimer{{ $etudiant->id }}Modal" class="btn btn-control bg-orange" data-toggle="modal" style="height:40px; width: 40px"><i class="fas fa-user-times"></i></a>
							
							</th>
                        </tr>
                        <!-- modifier étudiant -->
					<div class="modal fade" id="edit{{ $etudiant->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="edit{{ $etudiant->id }}ModalLabel"" aria-hidden="true">
						<div class="modal-dialog window-popup edit-my-poll-popup" role="document">
						<div class="modal-content">
							<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
								<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
							</a>
							<div class="modal-body">
								<div class="control-block-button post-control-button">
									<a href="#" class="btn btn-control has-i bg-facebook">
										<i class="fab fa-facebook-f" aria-hidden="true"></i>
									</a>

									<a href="#" class="btn btn-control has-i bg-twitter">
										<i class="fab fa-twitter" aria-hidden="true"></i>
									</a>
								</div>

								<div class="edit-my-poll-head bg-primary">
									<div class="head-content">
										<h2 class="title">Modifier étudiant</h2>
									</div>

									<img class="poll-img" style = "width: 20%" src="{{asset('assets/avatars/etd.png')}}" alt="screen">
								</div>

								<div class="edit-my-poll-content">
								
									<form class="resume-form">
										<div class="row">
											<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
												<div class="form-group label-floating is-empty">
													<label class="control-label">Matricule</label>
													<input class="form-control" placeholder="" value="" type="text">
												</div>
												<div class="form-group label-floating is-empty">
													<label class="control-label">Nom</label>
													<input class="form-control" placeholder="" value="" type="text">
												</div>
												<div class="form-group label-floating is-empty">
													<label class="control-label">Prénom</label>
													<input class="form-control" placeholder="" value="" type="text">
												</div>
												<div class="form-group date-time-picker label-floating is-empty">
															<label class="control-label">Date de naissance</label>
															<input name="datetimepicker" value=""/>
															<span class="input-group-addon">
															<svg class="olymp-calendar-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
														</span>
												</div>
												<div class="form-group label-floating is-empty">
													<label class="control-label">Email</label>
													<input class="form-control"  value="" type="email">
												</div>
												<div class="form-group label-floating is-empty">
															<label class="control-label">Mot de passe</label>
															<input class="form-control" type="password">
												</div>
												<div class="form-group label-floating is-empty">
													<label class="control-label">Filière</label>
													<input class="form-control" placeholder="" value="" type="text">
												</div>
												<div class="form-group label-floating is-empty">
													<label class="control-label">Niveau</label>
													<input class="form-control" placeholder="" value="" type="text">
												</div>
												<br>
												<div class="form-group label-floating is-empty">
													<div class="row">
														<div class="col col-lg-6 col-sm-12 col-12">
															<a href="#" class="btn btn-secondary btn-md full-width">Annuler</a>
														</div>

														<div class="col col-lg-6 col-sm-12 col-12">
															<a href="#" class="btn btn-primary btn-md full-width">Valider</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						</div>
					</div>
                        <!-- supprimer étudiant -->
						<div class="modal fade" id="supprimer{{ $etudiant->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="supprimer{{ $etudiant->id }}ModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-body text-center">
                                      Voulez-vous vraiment effectuer la suppression ? 
                                  </div>
                                  <div class="modal-footer">
                                      <form class="form-inline" action=""  method="POST">
                                          @method('DELETE')
                                          @csrf
                                      <button type="button" class="btn btn-light" data-dismiss="modal">Non</button>
                                          <button type="submit" class="btn btn-danger">Oui</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
    				</div>
  
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
				
					<form class="resume-form" method="POST" action="{{url('etudiant')}}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<fieldset>
							<div class="row">
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Matricule</label>
										<input class="form-control" placeholder="" value="" type="text">
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Nom</label>
										<input class="form-control" placeholder="" value="" type="text">
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Prénom</label>
										<input class="form-control" placeholder="" value="" type="text">
									</div>
									<div class="form-group date-time-picker label-floating is-empty">
												<label class="control-label">Date de naissance</label>
												<input name="datetimepicker" value=""/>
												<span class="input-group-addon">
												<svg class="olymp-calendar-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
											</span>
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Email</label>
										<input class="form-control"  value="" type="email">
									</div>
									<div class="form-group label-floating is-empty">
												<label class="control-label">Mot de passe</label>
												<input class="form-control" type="password">
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Filière</label>
										<input class="form-control" placeholder="" value="" type="text">
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Niveau</label>
										<input class="form-control" placeholder="" value="" type="text">
									</div>
									<br>
								</div>
							</div>
						</fieldset>
						<div class="col col-lg-6 col-sm-12 col-12">
							<button type="reset" class="btn btn-secondary btn-md full-width">Annuler</button>
						</div>

						<div class="col col-lg-6 col-sm-12 col-12">
							<button type="submit" class="btn btn-primary btn-md full-width">Valider</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

		
@endsection




 