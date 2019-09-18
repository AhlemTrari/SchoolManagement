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
							<th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>G1</td>
                            <td>mi</td>
                            <td>1ere annee</td>
							<th>
                                <center>
                                <a href="{{url('admin/groupe/show')}}" class="btn btn-control bg-grey" style="height:40px; width: 40px"><i class="fas fa-users"></i></a>
                                <a href="#edit_groupe" class="btn btn-control bg-breez" data-toggle="modal" style="height:40px; width: 40px"><i class="fas fa-edit"></i></a>
                                <a href="#supprimer_groupe" class="btn btn-control bg-orange" data-toggle="modal" style="height:40px; width: 40px"><i class="fas fa-trash-alt"></i></a>
                                <a href="#link_groupe" class="btn btn-control bg-green" data-toggle="modal" style="height:40px; width: 40px"><i class="fas fa-link"></i></a>
                                <a href="#unlink_groupe" class="btn btn-control bg-grey" data-toggle="modal" style="height:40px; width: 40px"><i class="fas fa-unlink"></i></a>
                            </center>
							</th>
                        </tr>
                        <!-- modifier groupe -->
                        <div class="modal fade" id="edit_groupe" tabindex="-1" role="dialog" aria-labelledby="edit-my-poll-popup" aria-hidden="true">
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
                                                <h2 class="title">Modifier grpupe</h2>
                                            </div>

                                            <img class="poll-img" style = "width: 20%" src="{{asset('assets/avatars/grp3.png')}}" alt="screen">
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
                        <!-- supprimer groupe -->
                        <div class="modal fade" id="supprimer_groupe" tabindex="-1" role="dialog" aria-labelledby="edit-my-poll-popup" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-body text-center">
                                      Voulez-vous vraiment effectuer la suppression ? 
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
                
                    <form class="resume-form" method="POST" action="#" enctype="multipart/form-data">
                        
                        <fieldset>
                            <div class="row">
                                <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Nom</label>
                                        <input class="form-control" placeholder="" value="" type="text">
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
                        <div class="row"> 
                        <div class="col-lg-6 col-sm-12 col-12">
                            <button type="reset" class="btn btn-secondary btn-md full-width">Annuler</button>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-12">
                            <button type="submit" class="btn btn-primary btn-md full-width">Valider</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- link groupe -->
<div class="modal fade" id="link_groupe" tabindex="-1" role="dialog" aria-labelledby="edit-widget-blog-post" aria-hidden="true">
    <div class="modal-dialog window-popup edit-widget edit-widget-blog-post" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
            </a>

            <div class="modal-header">
                <h6 class="title">Affecter un groupe à un enseignant</h6>
            </div>

            <div class="modal-body">
            <fieldset class="form-group label-floating is-select">
                <label class="control-label">Enseigant</label>
                <select class="selectpicker form-control">
                    <option value="AL">Show 3 Blog Posts</option>
                    <option value="2">Show 6 Blog Posts</option>
                    <option value="WY">Show 9 Blog Posts</option>
                </select>
            </fieldset>

            <fieldset class="form-group label-floating is-select">
                <label class="control-label">Module</label>
                <select class="selectpicker form-control">
                    <option value="AL">By Date (Newest to Oldest)</option>
                    <option value="2">By Favorites</option>
                    <option value="WY">By Repost</option>
                </select>
            </fieldset>

            <a href="#" class="btn btn-primary btn-lg full-width">Enregistrer les modifications</a>
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




 