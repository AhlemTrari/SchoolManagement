@extends('layouts.datatable')
@section('content')
		<div class="container">
		<div class="row">
			<div class="col-md-4">
				<!-- <a href="#" class="btn btn-lg full-width bg-grey">Exporter en fichier excel<div class="ripple-container"></div></a> -->
			</div>
			<div class="col-md-4">
				<a href="#" class="btn btn-breez btn-lg full-width btn-icon-left">Importer un fichier excel<div class="ripple-container"></div></a>
			</div>
			<div class="col-md-4">
				<a href="#" class="btn btn-secondary btn-lg full-width" data-toggle="modal" data-target="#nv_agent" href="#">Ajouter Agent anonymat<div class="ripple-container"></div></a>
			</div>
		</div>

		<div class="row">
            <div class="col-12">
				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Numéro de téléphone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($anonymats as $anonymat)
                        <tr>
                            <td>{{$anonymat->nom}}</td>
                            <td>{{$anonymat->prenom}}</td>
                            <td>{{$anonymat->email}}</td>
                            <td>{{$anonymat->num_tel}}</td>
							<td>
							<center>
								
								<form action="{{ url('admin/anonymat/'.$anonymat->id)}}" method="post">
	                        		<div class="row">
										<a href="#edit{{ $anonymat->id }}Modal" class="btn btn-control bg-breez" data-toggle="modal" style="height:40px; width: 40px"><i class="fas fa-user-edit"></i></a>

										<div class="modal fade" id="edit{{ $anonymat->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="edit{{ $anonymat->id }}Modal" aria-hidden="true">
												<div class="modal-dialog window-popup edit-my-poll-popup" role="document">
													<div class="modal-content">
														<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
															<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
														</a>
														<div class="modal-body">

															<div class="edit-my-poll-head bg-primary">
																<div class="head-content">
																	<h2 class="title">Modifier enseignant</h2>
																</div>

																<img class="poll-img" style = "width: 20%" src="{{asset('assets/avatars/user2.png')}}" alt="screen">
															</div>

															<div class="edit-my-poll-content">
															
																<form class="resume-form" action="{{ url('admin/anonymat/'.$anonymat->id)}}">
																	<input type="hidden" name="_method" value="PUT">
											            				{{ csrf_field() }}
											            			<fieldset>
																		<div class="form-group label-floating is-empty">
																			<label class="control-label">Nom <span class="text-danger">*</span></label>
																			<input class="form-control" placeholder="" value="{{$anonymat->nom}}" type="text" name="nom" required>
																		</div>
																		<div class="form-group label-floating is-empty">
																			<label class="control-label">Prénom <span class="text-danger">*</span></label>
																			<input class="form-control" placeholder="" value="{{$anonymat->prenom}}" type="text" name="prenom" required>
																		</div>
																		<div class="form-group label-floating is-empty">
																			<label class="control-label">Email  <span class="text-danger">*</span></label>
																			<input class="form-control" name="email"  value="{{$anonymat->email}}" type="email" required>
																		</div>
																		<div class="form-group date-time-picker label-floating is-empty">
																			<label class="control-label">Date de naissance</label>
																				<input type="date" value="{{$anonymat->date_naissance}}" name="date_naissance"/>
																				<span class="input-group-addon">
																					<svg class="olymp-calendar-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
																				</span>
																		</div>
																		<div class="form-group label-floating is-empty">
																			<label class="control-label">Numéro de téléphone</label>
																			<input class="form-control" type="text" name="num_tel" value="{{$anonymat->num_tel}}">
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

										<a href="#supprimer{{ $anonymat->id }}Modal" class="btn btn-control bg-orange" data-toggle="modal" style="height:40px; width: 40px"><i class="fas fa-user-times"></i></a>
										<div class="modal fade" id="supprimer{{ $anonymat->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="supprimer{{ $anonymat->id }}ModalLabel" aria-hidden="true">
					                      <div class="modal-dialog">
					                          <div class="modal-content">
					                              <div class="modal-body text-center">
					                                  Voulez-vous vraiment effectuer la suppression ? 
					                              </div>
					                              <div class="modal-footer">
					                                  <form class="form-inline" action="{{url('admin/anonymat/'.$anonymat->id)}}"  method="POST">
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
<!-- ajouter agent -->
<div class="modal fade" id="nv_agent" tabindex="-1" role="dialog" aria-labelledby="edit-my-poll-popup" aria-hidden="true">
	<div class="modal-dialog window-popup edit-my-poll-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-body">

				<div class="edit-my-poll-head bg-primary">
					<div class="head-content">
						<h2 class="title">Nouvel agent anonymat</h2>
					</div>

					<img class="poll-img" style = "width: 20%" src="{{asset('assets/avatars/user2.png')}}" alt="screen">
				</div>

				<div class="edit-my-poll-content">
				
					<form class="resume-form" method="POST" action="{{url('admin/anonymat')}}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<fieldset>
							<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
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
									<label class="control-label">Email <span class="text-danger">*</span></label>
									<input class="form-control"  name="email"  value="" type="email" required>
								</div>
								<div class="form-group label-floating is-empty">
											<label class="control-label">Mot de passe<span class="text-danger">*</span></label>
											<input class="form-control" type="password" name="password" required>
										</div>
								<div class="form-group label-floating is-empty">
									<label class="control-label">Numéro de téléphone</label>
									<input class="form-control" type="text" name="num_tel">
								</div>
								<div class="form-group label-floating is-empty">
									<center>
									<div style="width: 50%" class="file-upload">
										<label for="upload" class="file-upload__label">Upload photo</label>
										<input id="upload" class="file-upload__input" type="file" name="file-upload">
									</div>
									</center>
									<br><br>
								<div class="row" style="padding-top: 30px; margin-left: 35%;">
				                  <button class="close" type="button" data-dismiss="modal" aria-hidden="true"><i class="fa  fa-mail-reply"></i>Annuler &nbsp; &nbsp;</button>
				                   <button type="submit" class=" btn btn-lg btn-primary"><i class="fa fa-check"></i> Valider</button> 
				                </div>

									
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div> 
@endsection