@extends('layouts.master')
@section('content')
<a data-toggle="modal" data-target="#edit-my-poll-popup" href="#" class="btn btn-breez btn-sm">Open Popup</a>


<div class="modal fade" id="edit-my-poll-popup" tabindex="-1" role="dialog" aria-labelledby="edit-my-poll-popup" aria-hidden="true">
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
						<h2 class="title">Nouvel enseignant</h2>
					</div>

					<img class="poll-img" style = "width: 20%" src="{{asset('assets/avatars/profaj.png')}}" alt="screen">
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
								<div class="form-group label-floating is-empty">
									<label class="control-label">Email</label>
									<input class="form-control"  value="" type="email">
								</div>
								<div class="form-group label-floating is-empty">
											<label class="control-label">Mot de passe</label>
											<input class="form-control" type="password">
										</div>
								<div class="form-group date-time-picker label-floating is-empty">
											<label class="control-label">Date de naissance</label>
											<input name="datetimepicker" value=""/>
											<span class="input-group-addon">
											<svg class="olymp-calendar-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
										</span>
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

@endsection