<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Un plateforme e-santé pour la gestion des dossiers vaccinals des enfants</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/educate-custon-icon.css') }}"> 
    <link rel="stylesheet" href="{{ asset('/css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/metisMenu/metisMenu-vertical.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
    
   
</head>

<body>
   

    



    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="index.html"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        
                        <li @if ($menuItem=="index")
                            @yield('active')
                        @endif>
                            <a class="has-arrow" href="index.html">
								   <span class="educate-icon educate-home icon-wrap"></span>
								   <span class="mini-click-non">Enfants</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Affiche la liste des enfants affilié a cette EPSP" href="enfant.html"><span class="mini-sub-pro">Liste des Enfants</span></a></li>
                                <li><a title="Ajouter un nouveau enfant affilié a cette EPSP" href="add_enfant.html"><span class="mini-sub-pro">Ajouter une naissance</span></a></li>
                                <li><a title="Enfants non affilié" href="#"><span class="mini-sub-pro">Enfants hors EPSP</span></a></li>
                            </ul>
                        </li>


                        <li @if ($menuItem=="reclamation")
                            @yield('active')
                        @endif>
                            <a title="Landing Page" href="reclamation.html" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Réclamations</span></a>
                        </li>


                        <li @if ($menuItem=="polycliniques")
                            @yield('active')
                        @endif>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Polycliniques</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Affiche la liste des Polycliniques affilié a cette EPSP" href="poly.html"><span class="mini-sub-pro">Listes des polyclinique</span></a></li>
                                <li><a title="Ajouter une nouvelle polyclinique affilié à cette EPSP" href="add_poly.html"><span class="mini-sub-pro">Ajouter nouveau polyclinique</span></a></li>
                            </ul>
                        </li>


                        <li @if ($menuItem=="vaccins")
                            @yield('active')
                        @endif>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Vaccins</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="vaccin.html"><span class="mini-sub-pro">Listes des vaccins</span></a></li>
                                <li><a title="Add Students" href="add_vaccin.html"><span class="mini-sub-pro">Ajouter nouveau vaccin</span></a></li>
                            </ul>
                        </li>




                        <li @if ($menuItem=="plan")
                            @yield('active')
                        @endif>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Plan Vaccinal</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Afficher le plan courant de polyclinique" href="plan.html"><span class="mini-sub-pro">Plan courant</span></a></li>
                                <li><a title="Ajouter un nouveau plan vaccinale" href="add_plan.html"><span class="mini-sub-pro">Ajouter nouveau plan</span></a></li>
                                <li><a title="Afficher l'historique des plan archivés" href="historique_plan.html"><span class="mini-sub-pro">Historique  des plans</span></a></li>
                            </ul>
                        </li>


                        <li @if ($menuItem=="calendrier")
                            @yield('active')
                        @endif>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Calendrier vaccinal</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Library" href="calendrier.html"><span class="mini-sub-pro">Calendrier courant</span></a></li>

                            </ul>
                            
                             <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Library" href="add_calendrier.html"><span class="mini-sub-pro">Nouveau calendrier</span></a></li>

                            </ul>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Library" href="historique_calendrier.html"><span class="mini-sub-pro">Historique des calendrier</span></a></li>

                            </ul>
                        </li>


                      
                        <li @if ($menuItem=="rdv")
                            @yield('active')
                        @endif>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Listes des RDV</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Departments List" href="rdv.html"><span class="mini-sub-pro">Ce jour</span></a></li>
                                <li><a title="Add Departments" href="#"><span class="mini-sub-pro">Archive des RDV</span></a></li>
                               
                            </ul>


                        </li>

                         <li></li>
                            <a title="Landing Page" href="archive_vaccination.html" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Archive Vaccinnations</span></a>
                        </li>
                               

                        
                    
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->







    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
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
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="index.html" class="nav-link">Accueil</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Nouveautés</a>
                                                </li>
                                               
                                                <li class="nav-item dropdown res-dis-nn">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Calendrier Vaccinal <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">
                                                        <a href="#" class="dropdown-item">Calendier courante</a>
                                                        <a href="#" class="dropdown-item">Ancien calendrier</a>
                                                
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Contacts</a>
                                                </li>

                                                <li class="nav-item"><a href="#" class="nav-link">Aide</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                               

                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        
                                                       
                                                    </div>
                                                </li>


                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<span class="admin-name">EPSP Setif</span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>

                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                       
                                                        <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Paramétres</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Déconnection</a>
                                                        </li>
                                                    </ul>
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





            @yield('content')

            
         
            </div>
        </div>



  




        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2019. All rights reserved. Template by Tarek</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    

    <!-- js files-->
    <script src="{{ url('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/jquery.sticky.js') }}"></script>
    <script src="{{ url('js/jquery.meanmenu.js') }}"></script>
    <script src="{{ url('js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ url('js/metisMenu/metisMenu-active.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>
 
  
</body>

</html>