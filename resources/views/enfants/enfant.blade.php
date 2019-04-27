<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Un plateforme e-santé pour la gestion des dossiers vaccinals des enfants</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
     <!-- Start Welcome area -->
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro " style="background:#fff;">
                    <a href="index.html"><img class="main-logo" src="{{ asset('img/logo/logo.png')}}" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    <div class="header-top-menu tabl-d-n">
                                        <ul class="nav navbar-nav mai-top-nav">
                                            <li class="nav-item"><a href="enfant.html" class="nav-link">Listes des Enfants</a>
                                            </li>

                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>



    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="profile-info-inner">
                        
                        <div class="profile-details-hr">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr">
                                        <p><b>Nom</b><br /> {{$enfant->nom}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p><b>Prénom</b><br /> {{$enfant->prenom}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr">
                                        <p><b>Date de naissance</b><br/>{{$enfant->date_naissance}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p><b>Lieu de naissance</b><br />{{$enfant->commune->nom}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="address-hr">
                                        <p><b>Adresse</b><br />{{$enfant->pere->cite}}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="address-hr">
                                        <p><b>Observations</b><br /> {{$enfant->observation}}</p>
                                    </div>
                                </div>
                            </div>

                                <div class="row">
                                <div class="col-lg-12">
                                    <div class="address-hr">
                            <button class="btn btn-success" type="submit" onclick="window.location.href='add_vaccination.html'">Ajouter vaccination</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><h3>Dossier Vaccinal</h3></li>
                        </ul>



                        <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            
                             <!-- birth -->   
                             @foreach ($ages as $age)
                               @if ($age->age==0)                            
                            <div class="row mg-b-15">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="skill-title">
                                                <h2>Naissance</h2>
                                                <hr />
                                            </div>
                                        </div>
                                    </div>
                                <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                    <th scope="col">Nom de vaccin</th>
                                    <th scope="col">Date de validité</th>
                                    <th scope="col">Date d'expiration</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Lot</th>
                                    <th scope="col">Lieu de Vaccination</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($vaccinations as $vaccination)
                                        @if ($vaccination->age==$age->age)
                                            
                                        <tr>
                                            <th scope="row">{{$vaccination->vaccin->nom_abrevier}}</th>
                                            <td>{{$vaccination->date_vaccination}}</td>
                                            <td>{{$vaccination->details->date_peremption}}</td>
                                            <td>{{$vaccination->age}}</td>
                                            <td>{{$vaccination->details->num_lot}}</td>
                                            <td>{{$vaccination->polyclinique->nom}}</td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>

                                </table>

                                </div>
                            </div>
                            <!-- end birth -->                               
                          

                            </br></br></br>
                            <!-- to repeat -->    
                            
                                   
                               @else
                                    <div class="row mg-b-15">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="skill-title">
                                                        <!-- fix it to show only after birth --> 
                                                        <h2> {{$age->age}} Mois</h2>
                                                        <hr />
                                                    </div>
                                                </div>
                                            </div>

                                            <table class="table">
                                                    <thead class="thead-light">
                                                        <tr>
                                                        <th scope="col">Nom de vaccin</th>
                                                        <th scope="col">Date de validité</th>
                                                        <th scope="col">Date d'expiration</th>
                                                        <th scope="col">Age</th>
                                                        <th scope="col">Lot</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        @foreach ($vaccinations as $vaccination)
                                                            @if ($vaccination->age==$age->age)
                                                                
                                                            <tr>
                                                                <th scope="row">{{$vaccination->vaccin->nom_abrevier}}</th>
                                                                <td>111111{{$vaccination->date_vaccination}}</td>
                                                                <td>{{$vaccination->details->date_peremption}}</td>
                                                                <td>{{$vaccination->age}}</td>
                                                                <td>{{$vaccination->details->num_lot}}</td>
                                                            </tr>
                                                            @endif
                                                            @endforeach
                                                        </tbody>
                    
                                                    </table>
                    

                                        </div>
                                    </div> 
                            @endif
                            @endforeach                           

                            <!-- end to repeat -->                                                                                      
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








    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/main.js"></script>
</body>

</html>