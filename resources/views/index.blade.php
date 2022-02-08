<!doctype html>
<html lang="en">


<!-- Mirrored from thememakker.com/templates//lucid/hospital/light/depa-all.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Aug 2018 13:21:33 GMT -->
<head>
<title>CAT Chnu Fann</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css'); }}">
<link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css');}}">
<link rel="stylesheet" href="{{asset('assets/vendor/dropify/css/dropify.min.css');}}">
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css');}}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('light/assets/css/main.css');}}">
<link rel="stylesheet" href="{{asset('light/assets/css/color_skins.css');}}">
</head>
<body class="theme-cyan">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQq7XdrMTYayH-yKh_5LfAZsdEvs4lJg7Oj8w&usqp=CAU" width="30" height="30" alt="Lucid"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>

            <div class="navbar-brand">
                <a href="{{route('index')}}">Acceuil</a>                
            </div>
            
            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Search here..." type="text">
                    <button type="button" class="btn btn-outline-secondary"><i class="icon-magnifier"></i></button>
                </form>                

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        
                        <li>
                            <a href="{{route('login')}}" class="icon-menu"><h7>Connexion</h7><i class="icon-login"></i></a>
                        </li>
                        <li>
                            <a href="{{route('register')}}" class="icon-menu"><h7>Inscription</h7><i class="icon-user"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
           <br>
           <br>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>                
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>                
            </ul>
                
            <!-- Tab panes -->
            <div class="tab-content p-l-0 p-r-0">
                <div class="tab-pane active" id="menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            <li><a href="{{route('index')}}"><i class="icon-home"></i><span>Dashboard</span></a></li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-user-follow"></i><span>Docteurs</span> </a>
                                <ul>
                                    <li><a href="{{route('doctors')}}">Tous les Doctors</a></li>
                                    <li><a href="doctor-profile.html">Doctor Profile</a></li>
                                </ul>
                            </li>
                        
                            
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-layers"></i><span>Departments</span> </a>
                                <ul>
                                    <li ><a href="depa-all.html">All Departments</a></li>
                                    <li><a href="javascript:void(0);">Cardiologie</a></li>
                                    <li><a href="javascript:void(0);">pneumologie</a></li>
                                    <li><a href="javascript:void(0);">Gynecologie</a></li>
                                    <li><a href="javascript:void(0);">Neurologie</a></li>
                                    <li><a href="javascript:void(0);">Urologie</a></li>
                                    <li><a href="javascript:void(0);">Gastrologie</a></li>
                                    <li><a href="javascript:void(0);">Pediatrie</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('login')}}" class="has-arrow"><i class="icon-pencil"></i><span>Consultation</span></a>
                                <ul>
                                    <li><a href="{{route('rv')}}">Demander un rendez-vous</a></li>
                                    <li><a href="{{route('consultation')}}">Faire une Consultation</a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('login')}}" class="has-arrow"><i class="icon-lock"></i><span>Authentication</span></a>
                                <ul>
                                    <li><a href="{{route('login')}}">Login</a></li>
                                    <li><a href="{{route('register')}}">Register</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="{{route('centre')}}"><i class="icon-home"></i><span>Centre</span></a></li>
                            
                    </nav>
                </div>
                
                
                <div class="tab-pane p-l-15 p-r-15" id="setting">
                    <h6>Choose Skin</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>                   
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="cyan" class="active">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="blush">
                            <div class="blush"></div>
                            <span>Blush</span>
                        </li>
                    </ul>
                    <hr>
                    
                </div>             
            </div>          
        </div>
    </div>

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                                
                    
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card project_widget">
                        
                    </div>

                </div> 
            </div>          
            
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card project_widget">
                        <div class="pw_img">
                            <img class="img-fluid" src="../assets/images/image-gallery/1.jpg" alt="About the image">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header">
                                <h6>Cardiologie</h6>
                                <ul class="list-unstyled team-info margin-0 p-t-15">
                                    <li class="m-r-15"><small>Cardiologue</small></li>
                                    <li><img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                </ul>
                            </div>
                            <div class="pw_meta">
                                <p>Le cardiologue est un médecin spécialisé dans les maladies du cœur ou cardio-vasculaires[...]</p>
                                <a href="https://thememakker.com/templates/lucid/hospital/light/depa-more.html" class="btn btn-outline-primary">Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card project_widget">
                        <div class="pw_img">
                            <img class="img-fluid" src="../assets/images/image-gallery/2.jpg" alt="About the image">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header">
                                <h6>Pneumologie</h6>
                                <ul class="list-unstyled team-info margin-0 p-t-15">
                                    <li class="m-r-15"><small>Pneumologue</small></li>
                                    <li><img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                </ul>
                            </div>
                            <div class="pw_meta">
                                <p>le pneumologue : prévient les facteurs de risque de maladies pulmonaires ; diagnostique et évalue les pathologies [...]</p>
                                <button class="btn btn-outline-primary">Plus</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card project_widget">
                        <div class="pw_img">
                            <img class="img-fluid" src="../assets/images/image-gallery/3.jpg" alt="About the image">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header">
                                <h6>Gynecologie</h6>
                                <ul class="list-unstyled team-info margin-0 p-t-15">
                                    <li class="m-r-15"><small>Gynecologue</small></li>
                                    <li><img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                </ul>
                            </div>
                            <div class="pw_meta">
                                <p>Le médecin gynécologue-obstétricien est spécialisé dans l'étude du fonctionnement de la femme, de son appareil génital, de la grossesse[...]</p>
                                <button class="btn btn-outline-primary">Plus</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card project_widget">
                        <div class="pw_img">
                            <img class="img-fluid" src="../assets/images/image-gallery/4.jpg" alt="About the image">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header">
                                <h6>Neurologie</h6>
                                <ul class="list-unstyled team-info margin-0 p-t-15">
                                    <li class="m-r-15"><small>Neurologue</small></li>
                                    <li><img src="../assets/images/xs/avatar9.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar10.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                </ul>
                            </div>
                            <div class="pw_meta">
                                <p>La neurologie prend en charge les troubles de la motricité – paralysies d'origine cérébrale ou liées à une lésion de la moelle épinière ou des nerfs périphériques[...]</p>
                                <button class="btn btn-outline-primary">Plus</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card project_widget">
                        <div class="pw_img">
                            <img class="img-fluid" src="../assets/images/image-gallery/5.jpg" alt="About the image">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header">
                                <h6>Urologie</h6>
                                <ul class="list-unstyled team-info margin-0 p-t-15">
                                    <li class="m-r-15"><small>Urologue</small></li>
                                    <li><img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>                                
                                    <li><img src="../assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar8.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                </ul>
                            </div>
                            <div class="pw_meta">
                                <p>L'urologue peut être spécialisé en andrologie, il soigne alors plus particulièrement les troubles de l'érection et de stérilité masculine[...]</p>
                                <button class="btn btn-outline-primary">Plus</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card project_widget">
                        <div class="pw_img">
                            <img class="img-fluid" src="../assets/images/image-gallery/6.jpg" alt="About the image">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header">
                                <h6>Gastrologie</h6>
                                <ul class="list-unstyled team-info margin-0 p-t-15">
                                    <li class="m-r-15"><small>Guastrologue</small></li>
                                    <li><img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar8.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar10.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                </ul>
                            </div>
                            <div class="pw_meta">
                                <p>Le gastro-entérologue est un spécialiste qui traite toutes les maladies ou troubles fonctionnels du tube digestif de l'œsophage[...]</p>
                                <button class="btn btn-outline-primary">Plus</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card project_widget">
                        <div class="pw_img">
                            <img class="img-fluid" src="../assets/images/image-gallery/7.jpg" alt="About the image">
                        </div>
                        <div class="pw_content">
                            <div class="pw_header">
                                <h6>Pediatrie</h6>
                                <ul class="list-unstyled team-info margin-0 p-t-15">
                                    <li class="m-r-15"><small>Pediatre</small></li>
                                    <li><img src="../assets/images/xs/avatar9.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>                                
                                    <li><img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar8.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>                                
                                    <li><img src="../assets/images/xs/avatar10.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Avatar" alt="Avatar"></li>
                                </ul>
                            </div>
                            <div class="pw_meta">
                                <p>Pourquoi aller voir un pédiatre ? Tout au long de l'enfance et de l'adolescence, le pédiatre s'implique auprès de l'enfant et de ses parents afin de prévenir et soigner les pathologies infantiles, [...]</p>
                                <button class="btn btn-outline-primary">Plus</button>
                            </div>
                        </div>
                    </div>
                </div>
                                                                    
                
            </div>
        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="{{asset('light/assets/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{asset('light/assets/bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{asset('light/assets/bundles/mainscripts.bundle.js')}}"></script>
</body>

<!-- Mirrored from thememakker.com/templates//lucid/hospital/light/depa-all.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Aug 2018 13:21:54 GMT -->
</html>
