@extends('layout')

@section('active')
class="active"
@endsection
@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="sparkline12-list">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Ajouter enfant</h1>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="all-form-element-inner">
                                                    <form action="#">
                                                    
                                                        <!--  form -->
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="Nom" type="text" class="form-control" placeholder="N° état civile">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="finish" id="finish" type="text" class="form-control" placeholder="Nom">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="duration" type="text" class="form-control" placeholder="Prénom">
                                                                </div>

                                                       <div class="form-group">
                                                            <select class="form-control">
                                                                <option>Sexe</option>
                                                                <option>Masculin</option>
                                                                <option>Feminin</option>
                                                            </select>
                                                        </div>

                                                                <div class="form-group">
                                                                    <input name="duration" type="text" class="form-control" placeholder="Fils/Fille de">
                                                                </div>
                                                                
                                                          <div class="form-group">
                                                            <select class="form-control">
                                                                <option>Lieu d'accouchement</option>
                                                                <option>Maternité Sétif</option>
                                                                <option>Mahabi</option>
                                                            </select>
                                                        </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group res-mg-t-15">
                                                                    <input name="department" type="text" class="form-control" placeholder="Date de Naissance">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="description" placeholder="Observations ..."></textarea>
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                        <!-- end form -->
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection