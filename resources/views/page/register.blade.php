<!doctype html>
<html lang="en">


<!-- Mirrored from thememakker.com/templates//lucid/hospital/light/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Aug 2018 13:22:01 GMT -->
<head>
<title>CAT | Inscription</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css'); }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css'); }}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset('light/assets/css/main.css'); }}">
<link rel="stylesheet" href="{{ asset('light/assets/css/color_skins.css'); }}">
</head>

<body class="theme-cyan">
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle auth-main">
				<div class="auth-box">
                    <div class="top">
                        <img src="https://thememakker.com/templates//lucid/hospital/assets/images/logo-white.svg" alt="Lucid">
                    </div>
					<div class="card">
                        <div class="header">
                            <p class="lead">Create an account</p>
                        </div>
                        <div class="body">
                            <form class="form-auth-small">
                                <div class="form-group">
                                    <label for="signup-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control" id="signup-email" placeholder="Your email">
                                </div>
                                <div class="form-group">
                                    <label for="signup-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="signup-password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="signup-password" class="control-label sr-only">Repeat Password</label>
                                    <input type="password" class="form-control" id="signup-password" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>
                                <div class="bottom">
                                    <span class="helper-text">Already have an account? <a href="{{route('login')}}">Login</a></span>
                                </div>
                            </form>
                            <div class="separator-linethrough"><span>OR</span></div>
                            <button class="btn btn-signin-social"><i class="fa fa-facebook-official facebook-color"></i> Sign in with Facebook</button>
                            <button class="btn btn-signin-social"><i class="fa fa-twitter twitter-color"></i> Sign in with Twitter</button>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

<!-- Mirrored from thememakker.com/templates//lucid/hospital/light/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Aug 2018 13:22:01 GMT -->
</html>
