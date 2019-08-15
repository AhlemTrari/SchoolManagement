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
				<a href="#" class="btn btn-secondary btn-lg full-width" data-toggle="modal" data-target="#nv_prof" href="#">Ajouter enseignant<div class="ripple-container"></div></a>
			</div>
		</div>
		<div class="row">
            <div class="col-12">
				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <!-- <th>Dépaterement</th> -->
                            <th>Email</th>
                            <th>N° de téléphone</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($profs as $prof)
                        <tr>
                            <td>{{$prof->nom}}</td>
                            <td>{{$prof->prenom}}</td>
                            <!-- <td>{{$prof->dep}}</td> -->
                            <td>{{$prof->email}}</td>
                            <td>{{$prof->num_tel}}</td>
                            <td>
                            <center>
                            	<!-- show -->
								<a href="{{url('admin/enseignant/show')}}" class="btn btn-control bg-grey" style="height:40px; width: 40px"><i class="fas fa-user"></i></a>
								<!-- end show -->
								<!-- edit -->
								<a href="#edit{{ $prof->id }}Modal" class="btn btn-control bg-breez" data-toggle="modal" style="height:40px; width: 40px"><i class="fas fa-user-edit"></i></a>

								<!-- end edit -->
								<!-- delet -->
								<a href="#supprimer{{ $prof->id }}Modal" class="btn btn-control bg-orange" data-toggle="modal" style="height:40px; width: 40px"><i class="fas fa-user-times"></i></a>
								<!-- end delet -->
							</center>
                            </td>
                        </tr>

	<!-- modifier enseignant -->
	<div class="modal fade" id="edit{{ $prof->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="edit{{ $prof->id }}Modal" aria-hidden="true">
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
						<h2 class="title">Modifier enseignant</h2>
					</div>

					<img class="poll-img" style = "width: 20%" src="{{asset('assets/avatars/profm.png')}}" alt="screen">
				</div>

				<div class="edit-my-poll-content">
				
					<form class="resume-form">
						<div class="row">
							<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
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
									<label class="control-label">Numéro de téléphone</label>
									<input class="form-control" type="text">
								</div>
								<div class="form-group label-floating is-empty">
									<center>
									<div style="width: 50%" class="file-upload">
										<label for="upload" class="file-upload__label">Upload photo</label>
										<input id="upload" class="file-upload__input" type="file" name="file-upload">
									</div>
									</center>
									<br><br>
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
	<!-- supprimer enseignant -->

	<div class="modal fade" id="supprimer{{ $prof->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="supprimer{{ $prof->id }}ModalLabel" aria-hidden="true">
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

    <!-- ajouter enseignant -->
    <div class="modal fade" id="nv_prof" tabindex="-1" role="dialog" aria-labelledby="edit-my-poll-popup" aria-hidden="true">
		<div class="modal-dialog window-popup edit-my-poll-popup" role="document">
			<div class="modal-content">
				<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
				<div class="modal-body">

					<div class="edit-my-poll-head bg-primary">
						<div class="head-content">
							<h2 class="title">Nouvel enseignant</h2>
						</div>

						<img class="poll-img" style = "width: 20%" src="{{asset('assets/avatars/profaj.png')}}" alt="screen">
					</div>

					<div class="edit-my-poll-content">
						<form method="POST" action="{{url('admin/enseignant')}}" enctype="multipart/form-data">
                     	 {{ csrf_field() }}
			                <fieldset>
			                    <div class="form-group label-floating is-empty">
									<label class="control-label">Nom <span class="text-danger">*</span></label>
									<input class="form-control" placeholder="" value="{{old('nom')}}" type="text" name="nom" required>
								</div>
								<div class="form-group label-floating is-empty">
									<label class="control-label">Prénom <span class="text-danger">*</span></label>
									<input class="form-control" placeholder="" value="{{old('prenom')}}" type="text" name="prenom" required>
								</div>
								<div class="form-group label-floating is-select">
				                    <label class="control-label">Grade <span class="text-danger">*</span></label>
				                    <select name="grade" class="selectpicker form-control" required>
			                            <option>{{old('grade')}}</option>
			                            <option>MAA</option>
			                            <option>MAB</option>
			                            <option>MCA</option>
			                            <option>MCB</option>
			                            <option>Doctorant</option>
			                            <option>Professeur</option>
			                        </select>
				                  </div>
								<div class="form-group label-floating is-empty">
									<label class="control-label">Email  <span class="text-danger">*</span></label>
									<input class="form-control" name="email"  value="" type="email" required>
								</div>
								<div class="form-group date-time-picker label-floating is-empty">
									<label class="control-label">Date de naissance</label>
										<input type="date" value="" name="date_naissance"/>
										<span class="input-group-addon">
											<svg class="olymp-calendar-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
										</span>
								</div>
								<div class="form-group label-floating is-empty">
									<label class="control-label">Mot de passe  <span class="text-danger">*</span></label>
									<input class="form-control" type="password" name="password" required>
								</div>
								<div class="form-group label-floating is-empty">
									<label class="control-label">Numéro de téléphone</label>
									<input class="form-control" type="text" name="num_tel">
								</div>
								<div class="form-group label-floating is-empty">
									<center>
										<div style="width: 50%" class="file-upload">
											<label for="upload" name="img" class="file-upload__label">Upload photo</label>
											<input id="upload" name="img" class="file-upload__input" type="file" >
										</div>
									</center> 
									<br><br>
								</div>
			                </fieldset>

			                <div class="row" style="padding-top: 30px; margin-left: 35%;">
			                  <button class="close" type="button" data-dismiss="modal" aria-hidden="true"><i class="fa  fa-mail-reply"></i>Annuler &nbsp; &nbsp;</button>
			                   <button type="submit" class=" btn btn-lg btn-primary"><i class="fa fa-check"></i> Valider</button> 
			                </div>
              			</form>
					
						<!-- <form method="POST" action="{{url('enseignant')}}" enctype="multipart/form-data">
							{{ csrf_field() }}
							<fieldset>
								<div class="row">
									<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group label-floating is-empty">
											<label class="control-label">Nom <span class="text-danger">*</span></label>
											<input class="form-control" placeholder="" value="{{old('nom')}}" type="text" name="nom" required>
										</div>
										<div class="form-group label-floating is-empty">
											<label class="control-label">Prénom <span class="text-danger">*</span></label>
											<input class="form-control" placeholder="" value="{{old('prenom')}}" type="text" name="prenom" required>
										</div>
										<div class="form-group label-floating is-select">
						                    <label class="control-label">Grade <span class="text-danger">*</span></label>
						                    <select name="grade" class="selectpicker form-control" required>
					                            <option>{{old('grade')}}</option>
					                            <option>MAA</option>
					                            <option>MAB</option>
					                            <option>MCA</option>
					                            <option>MCB</option>
					                            <option>Doctorant</option>
					                            <option>Professeur</option>
					                        </select>
						                  </div>
										<div class="form-group label-floating is-empty">
											<label class="control-label">Email  <span class="text-danger">*</span></label>
											<input class="form-control" name="email"  value="" type="email" required>
										</div>
										<div class="form-group date-time-picker label-floating is-empty">
											<label class="control-label">Date de naissance</label>
												<input name="datetimepicker" value="" />
												<span class="input-group-addon">
													<svg class="olymp-calendar-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
												</span>
										</div>
										<div class="form-group label-floating is-empty">
											<label class="control-label">Mot de passe  <span class="text-danger">*</span></label>
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
													<input id="upload" class="file-upload__input" type="file" name="img">
												</div>
											</center> 
											<br><br>
										</div>
									</div>
								</div>
							</fieldset>
							<div class="row">
								<div class="col col-lg-6 col-sm-12 col-12">
									<button type="reset" class="btn btn-secondary btn-md full-width">Annuler</button>
								</div>

								<div class="col col-lg-6 col-sm-12 col-12">
									<button type="submit" class="btn btn-primary btn-md full-width">Valider</button>
								</div>
							</div>	
										
						</form> -->
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection