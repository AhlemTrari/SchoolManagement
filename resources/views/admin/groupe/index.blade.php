@extends('layouts.datatable')

@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-8"></div>
			
			<div class="col-md-4">
				<a href="#" class="btn btn-secondary btn-lg full-width" data-toggle="modal" data-target="#nv_groupe" href="#">Ajouter Groupe<div class="ripple-container"></div></a>
			</div>
		</div>
		<div class="row">
            <div class="col-12">
				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Filière</th>
                            <th>Niveau</th>
							<th width="25%">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($groupes as $groupe)
                        <tr>
                            <td>{{$groupe->nom}}</td>
                            <td>{{$groupe->filiere}}</td>
                            <td>{{$groupe->niveau}}</td>
							<th>
                                <center>
                                    <form action="{{ url('admin/groupe/'.$groupe->id)}}" method="post">
                                        <div class="row">
                                            <!-- show groupe -->
                                            <a href="{{url('admin/groupe/'.$groupe->id.'/show')}}" class="btn btn-control bg-grey" style="height:40px; width: 40px"><i class="fas fa-users"></i></a>
                                            <!-- end show -->

                                            <!-- edit groupe -->
                                            <a href="#edit{{ $groupe->id }}Modal" class="btn btn-control bg-breez" data-toggle="modal" style="height:40px; width: 40px"><i class="fas fa-edit"></i></a>

                                            <!-- modal -->

                                            <div class="modal fade" id="edit{{ $groupe->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="edit{{ $groupe->id }}Modal" aria-hidden="true">
                                                <div class="modal-dialog window-popup edit-my-poll-popup" role="document">
                                                    <div class="modal-content">
                                                        <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                                                            <svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
                                                        </a>
                                                        <div class="modal-body">

                                                            <div class="edit-my-poll-head bg-primary">
                                                                <div class="head-content">
                                                                    <h2 class="title">Modifier le groupe</h2>
                                                                </div>

                                                                <img class="poll-img" style = "width: 20%" src="{{asset('assets/avatars/grpaj.png')}}" alt="screen">
                                                            </div>

                                                            <div class="edit-my-poll-content">
                                                            
                                                                <form class="resume-form" action="{{ url('admin/groupe/'.$groupe->id)}}">
                                                                    <input type="hidden" name="_method" value="PUT">
                                                                        {{ csrf_field() }}
                                                                    <fieldset>
                                                                        <div class="form-group label-floating is-empty">
                                <label class="control-label">Nom</label>
                                <input class="form-control" placeholder="" name="nom" value="{{$groupe->nom}}" type="text">
                                         </div>
                                <div class="form-group label-floating is-empty">
                    <label class="control-label">Filière</label>
                  <input class="form-control" placeholder="" name="filiere" value="{{$groupe->filiere}}" type="text">
                                                     </div>
                                                    <div class="form-group label-floating is-empty">
                                                  <label class="control-label">Niveau</label>
                     <input class="form-control" name="niveau" value="{{$groupe->niveau}}" type="text">
                                             </div>
                    <div class="form-group label-floating is-empty">
                                <label class="control-label">Etudiants <span class="text-danger">*</span></label> 
                            <select  name="etudiant[]" class=" selectpicker form-control" multiple required  data-max-options="20">
                                             <option>
                                   @foreach ($groupe->etudiants as $etu) 
                                            <option value="{{$etu->id}}" selected>
                                                             {{ $etu->nom }} {{ $etu->prenom }}
                                                            </option>
                                                           @endforeach
                                                            </option>
                                                            @foreach($etudiants as $etudiant)
                                                        <option value="{{$etudiant->id}}">
                                                        {{$etudiant->nom}} {{$etudiant->prenom}}
                     </option>
                                                        @endforeach
                                                        </select>
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

                                            <!-- end edit -->

                                            <!-- delete groupe -->
                                            <a href="#supprimer{{ $groupe->id }}Modal" class="btn btn-control bg-orange" data-toggle="modal" style="height:40px; width: 40px"><i class="fas fa-trash-alt"></i></a>

                                            <!-- modal -->
                                            <div class="modal fade" id="supprimer{{ $groupe->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="supprimer{{ $groupe->id }}ModalLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                  <div class="modal-content">
                                                      <div class="modal-body text-center">
                                                          Voulez-vous vraiment effectuer la suppression ? 
                                                      </div>
                                                      <div class="modal-footer">
                                                          <form class="form-inline" action="{{url('admin/groupe/'.$groupe->id)}}"  method="POST">
                                                              @method('DELETE')
                                                              @csrf
                                                          <button type="button" class="btn btn-light" data-dismiss="modal">Non</button>
                                                              <button type="submit" class="btn btn-danger">Oui</button>
                                                          </form>
                                                      </div>
                                                  </div>
                                              </div>
                                            </div>

                                            <!-- end delete -->

                                            <!-- affecter un enseigant -->
                                            <a href="#link_groupe{{ $groupe->id }}Modal" class="btn btn-control bg-green" data-toggle="modal" style="height:40px; width: 40px"><i class="fas fa-link"></i></a>
                                            <!-- modal -->
                                            <div class="modal fade" id="link_groupe{{ $groupe->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="link_groupe{{ $groupe->id }}ModalLabel" aria-hidden="true">
                                                <div class="modal-dialog window-popup edit-widget edit-widget-blog-post" role="document">
                                                    <div class="modal-content">
                                                        <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                                                            <svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
                                                        </a>

                                                        <div class="modal-header">
                                                            <h6 class="title">Affecter un groupe à un enseignant</h6>
                                                        </div>


                                                        <div class="modal-body">
                                                            <form class="resume-form" method="POST" action="{{url('admin/groupe/'.$groupe->id.'/affecter')}}" enctype="multipart/form-data">
                                                                {{ csrf_field() }}  
                                                                <fieldset class="form-group label-floating is-select">
                                                                    <label class="control-label">Enseigant</label>
                                                                    <select class="selectpicker form-control" name="prof">
                                                            @foreach($profs as $prof)
                                                         <option value="{{$prof->id}}">
                                                         {{$prof->nom}} {{$prof->prenom}}
                                                             </option>
                                                             @endforeach
                                                                    </select>
                                                                </fieldset>

                                                                <fieldset class="form-group label-floating is-select">
                                                                    <label class="control-label">Module</label>
                                                                    <select class="selectpicker form-control" name="module_id">
                                                                        @foreach($modules as $module)
                                                                          <option value="{{$module->id}}">
                                                                            {{$module->Libelle}}
                                                                          </option>
                                                                        @endforeach
                                                                    </select>
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
                                            <!-- end affecter -->

                                            <!-- deaffecter un enseigant -->
                                            <a href="#unlink_groupe" class="btn btn-control bg-grey" data-toggle="modal" style="height:40px; width: 40px"><i class="fas fa-unlink"></i></a>
                                            <!-- end deaffecter -->
                                        </div>
                                    </form>

                                </center>
							</th>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
</div>
<!-- ajouter un groupe -->
<div class="modal fade" id="nv_groupe" tabindex="-1" role="dialog" aria-labelledby="edit-my-poll-popup" aria-hidden="true">
    <div class="modal-dialog window-popup edit-my-poll-popup" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
            </a>
            <div class="modal-body">

                <div class="edit-my-poll-head bg-primary">
                    <div class="head-content">
                        <h2 class="title">Nouveau groupe</h2>
                    </div>

                    <img class="poll-img" style = "width: 20%" src="{{asset('assets/avatars/grpaj.png')}}" alt="screen">
                </div>

                <div class="edit-my-poll-content">
                
                    <form class="resume-form" method="POST" action="{{url('admin/groupe')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <fieldset>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Nom <span class="text-danger">*</span></label>
                                        <input class="form-control" placeholder="" value="" name="nom" type="text">
                                    </div>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Filière</label>
                                        <input class="form-control" placeholder="" value="" name="filiere" type="text">
                                    </div>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Niveau</label>
                                        <input class="form-control" placeholder="" value="" name="niveau" type="text">
                                    </div>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Etudiants <span class="text-danger">*</span></label> 
                                            <select  name="etudiant[]" class=" selectpicker form-control" multiple>
                                              
                                               @foreach($etudiants as $etudiant)
                                              <option value="{{$etudiant->id}}">
                                                {{$etudiant->nom}} {{$etudiant->prenom}}
                                              </option>
                                               @endforeach
                                        </select>
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

<!-- UNLINK GROUPE -->
<div class="modal fade" id="unlink_groupe" tabindex="-1" role="dialog" aria-labelledby="edit-my-poll-popup" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-body text-center">
              Voulez-vous vraiment détacher ce groupe de cet enseiganant ? 
          </div>
          <div class="modal-footer">
              <form class="form-inline" action=""  method="POST">
              <button type="button" class="btn btn-light" data-dismiss="modal">Non</button>
                  <button type="submit" class="btn btn-danger">Oui</button>
              </form>
          </div>
      </div>
  </div>
</div>

@endsection




 