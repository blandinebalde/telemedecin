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
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/vendor/dropify/css/dropify.min.css');}}">
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css');}}">
<link rel="stylesheet" href="{{asset('assets/vendor/jquery-steps/jquery.steps.css');}}">
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/nouislider/nouislider.min.css');}}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('light/assets/css/main.css');}}">
<link rel="stylesheet" href="{{asset('light/assets/css/color_skins.css');}}">
</head>
<body class="theme-cyan">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
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
            <div class="row clearfix">
                    <div class="card">
                        <div class="header">
                            <h2>Payment Information</h2>                           
                        </div>
                        <div class="body">
                            <p>
                                <img src="../assets/images/mastercard.png" class="m-r-5" alt="">
                                <img src="../assets/images/visa-card.png" class="m-r-5" alt="">
                                <img src="../assets/images/paypal.png" alt="">
                            </p>
                            <p class="alert alert-success">Some text success or error</p>                            
                            <form>
                                <div class="form-group">
                                    <label>Nom complet  (on the card)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="username" placeholder="" required="">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Numero Carte</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="cardNumber" placeholder="">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label><span class="hidden-xs">Expiration</span> </label>
                                            <div class="form-inline">
                                                <select class="form-control" style="width:45%">
                                                    <option>MM</option>
                                                    <option>01 - Janiary</option>
                                                    <option>02 - February</option>
                                                    <option>03 - Mars</option>
                                                </select>
                                                <span style="width:10%; text-align: center"> / </span>
                                                <select class="form-control" style="width:45%">
                                                    <option>YY</option>
                                                    <option>2018</option>
                                                    <option>2019</option>
                                                    <option>2020</option>
                                                    <option>2021</option>
                                                    <option>2022</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                                            <input class="form-control" required="" type="text">
                                        </div>
                                    </div>
                                </div>
                                <button class="subscribe btn btn-primary btn-block" type="button"> Confirmer  </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="{{asset('light/assets/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{asset('light/assets/bundles/vendorscripts.bundle.js');}}"></script>

<script src="{{asset('light/assets/bundles/mainscripts.bundle.js');}}"></script>
<script src="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js');}}"></script>


<script src="{{asset('assets/vendor/jquery-validation/jquery.validate.js')}}"></script> <!-- Jquery Validation Plugin Css -->
<script src="{{asset('assets/vendor/jquery-steps/jquery.steps.js');}}"></script> <!-- JQuery Steps Plugin Js -->

<script src="{{asset('light/assets/bundles/mainscripts.bundle.js');}}"></script>
<script src="{{asset('light/assets/js/pages/forms/form-wizard.js');}}"></script>
<script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js');}}"></script>
<script src="{{asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js');}}"></script> <!-- Bootstrap Tags Input Plugin Js --> 
<script src="{{asset('assets/vendor/nouislider/nouislider.js');}}"></script> <!-- noUISlider Plugin Js --> 
  

<script>
  $(function () {
    $('#datetimepicker1').datetimepicker();
 });
</script>
<script>
    $(function() {
        // validation needs name of the element
        $('#food').multiselect();
        $('#foods').multiselect();


        // initialize after multiselect
        $('#basic-form').parsley();
    });
    </script>
</body>

<!-- Mirrored from thememakker.com/templates//lucid/hospital/light/depa-all.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Aug 2018 13:21:54 GMT -->
</html>
