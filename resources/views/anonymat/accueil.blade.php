@extends('layouts.ano')
@section('content')
<div class="row">
    <div class="col col-xl-12  col-lg-12  col-md-12 col-sm-12 col-12">
        <div class="ui-block">
         <div class="ui-block-content">
                        
                <ul class="nav nav-pills nav-fill">

                    <li class="nav-item">
                        <a href="#etudiant" data-toggle="tab" aria-expanded="false" class="nav-link active">
                           Coder
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#presence" data-toggle="tab" aria-expanded="false" class="nav-link">
                           Décoder
                        </a>
                    </li>
                </ul>
                <br><br>
                <div class="tab-content">
                    <div class="tab-pane show active" id="etudiant">
                      <div class="ui-block">
                        <div class="container">
                            <br>

                    <div class="row">
                        <div class="col-md-8"></div>
            
                        <div class="col-md-4">
                        <a href="#" class="btn btn-secondary btn-lg full-width" data-toggle="modal" data-target="#nv_paquet" href="#">Ajouter un paquet<div class="ripple-container"></div></a>
                    </div>
                    </div> 
                    <div class="row">
                    <div class="col-12">
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Libellé</th>
                           
                            <th width="25%">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                         @foreach($paquets as $paquet)
                        
                        <tr>
                            <td>{{$paquet->Libelle}}</td>
                            <th>
                                <center>
                                    <form action="" method="post">
                                        <div class="row">
                                            <!-- affecter un enseigant -->
                                            <a href="" class="btn btn-control bg-green" data-toggle="modal" style="height:40px; width: 40px"><i class="fas fa-link"></i></a>
                                            <!-- modal -->
                                            <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                                                <div class="modal-dialog window-popup edit-widget edit-widget-blog-post" role="document">
                                                    <div class="modal-content">
                                                        <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                                                            <svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
                                                        </a>

                                                        <div class="modal-header">
                                                            <h6 class="title">Affecter un groupe à un enseignant</h6>
                                                        </div>


                                                        <div class="modal-body">
                                                            <form class="resume-form" method="POST" action="" enctype="multipart/form-data">
                                                                {{ csrf_field() }}  
                                                                <fieldset class="form-group label-floating is-select">
                                                                    <label class="control-label">Enseigant</label>
                                                                    <!-- select -->
                                                                </fieldset>

                                                                <fieldset class="form-group label-floating is-select">
                                                                    <label class="control-label">Module</label>
                                                                    <select class="selectpicker form-control" name="module">
                                                                        <option value="modul1">modul1</option>
                                                                        <option value="modul2">By modul2</option>
                                                                        <option value="modul3">modul3</option>
                                                                        <option value="modul4">modul4</option>
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
                        <div class="modal fade" id="nv_paquet" tabindex="-1" role="dialog" aria-labelledby="edit-my-poll-popup" aria-hidden="true">
                        <div class="modal-dialog window-popup edit-my-poll-popup" role="document">
                        <div class="modal-content">
                        <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                        <svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
            </a>
            <div class="modal-body">

                <div class="edit-my-poll-head bg-primary">
                    <div class="head-content">
                        <h2 class="title">Nouveau paquet</h2>
                    </div>
                </div>

                <div class="edit-my-poll-content">
                
                    <form class="resume-form" method="POST" action="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <fieldset>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Libellé <span class="text-danger">*</span></label>
                                        <input class="form-control" placeholder="" value="" name="nom" type="text">
                                    </div>
                                  <!--   <div class="form-group label-floating is-empty">
                                        <label class="control-label">Module</label>
                                        <input class="form-control" placeholder="" value="" name="filiere" type="text">
                                    </div> -->
                                   <!--  <div class="form-group label-floating is-empty">
                                        <label class="control-label">Etudiants <span class="text-danger">*</span></label> 
                                            <select  name="etudiant[]" class=" selectpicker form-control" multiple>
                                              
                                              
                                              <option value="">
                                                
                                              </option>
                                              
                                        </select>
                                    </div> -->
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


                      </div>
                    </div>

                    <div class="tab-pane" id="presence">
                        <div class="ui-block">
                            <h1>jjjjj</h1>
                        </div>
                    </div>
                </div>

                            
            </div>

        </div>
           
    </div>
 </div>
@endsection