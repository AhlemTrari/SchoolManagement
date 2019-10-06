
@extends('layouts.datatable')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<!-- <a href="#" class="btn btn-lg full-width bg-grey">Exporter en fichier excel<div class="ripple-container"></div></a> -->
		</div>
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<a href="#" class="btn btn-secondary btn-lg full-width" data-toggle="modal" data-target="#nv_module" href="#">Ajouter Module<div class="ripple-container"></div></a>
		</div>
	</div>
	<div class="row">
        <div class="col-12">
			<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Libellé</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>
                	@foreach($modules as $module)
                    <tr>
                        <td>{{$module->id}}</td>
                        <td>{{$module->Libelle}}</td>
                        <td>
	                        <center>
	                        	<form action="{{ url('admin/module/'.$module->id)}}" method="post">
	                        	<div class="row">
									<!-- delet -->
									<a href="#supprimer{{ $module->id }}Modal" class="btn btn-control bg-orange" data-toggle="modal" style="height:40px; width: 40px"><i class="fas fa-user-times"></i></a>

									<div class="modal fade" id="supprimer{{ $module->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="supprimer{{ $module->id }}ModalLabel" aria-hidden="true">
								          <div class="modal-dialog">
								              <div class="modal-content">
								                  <div class="modal-body text-center">
								                      Voulez-vous vraiment effectuer la suppression ? 
								                  </div>
								                  <div class="modal-footer">
								                      <form class="form-inline" action="{{ url('admin/module/'.$module->id)}}"  method="POST">
								                          @method('DELETE')
								                          @csrf
								                      <button type="button" class="btn btn-light" data-dismiss="modal">Non</button>
								                          <button type="submit" class="btn btn-danger">Oui</button>
								                      </form>
								                  </div>
								              </div>
								          </div>
								    </div>

									<!-- end delet -->
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

    <!-- ajouter enseignant -->
    <div class="modal fade" id="nv_module" tabindex="-1" role="dialog" aria-labelledby="edit-my-poll-popup" aria-hidden="true">
		<div class="modal-dialog window-popup edit-my-poll-popup" role="document">
			<div class="modal-content">
				<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
				<div class="modal-body">

					<div class="edit-my-poll-head bg-primary">
						<div class="head-content">
							<h2 class="title">Nouveau module</h2>
						</div>

						<img class="poll-img" style = "width: 20%" src="{{asset('assets/avatars/profaj.png')}}" alt="screen">
					</div>

					<div class="edit-my-poll-content">
						<form method="POST" action="{{url('admin/module')}}" enctype="multipart/form-data">
                     	 {{ csrf_field() }}
			                <fieldset>
			                    <div class="form-group label-floating is-empty">
									<label class="control-label">Libellé <span class="text-danger">*</span></label>
									<input class="form-control" placeholder="" value="{{old('libelle')}}" type="text" name="libelle" required>
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