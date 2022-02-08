<!doctype html>
<html lang="en">


<!-- Mirrored from thememakker.com/templates//lucid/hospital/light/page-forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Aug 2018 13:22:03 GMT -->
<head>
<title>CAT | Reset Password</title>
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
<link rel="stylesheet" href="{{ asset('light/assets/css/main.css');}}">
<link rel="stylesheet" href="{{ asset('light/assets/css/color_skins.css');}}">
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
                            <p class="lead">Recover my password</p>
                        </div>
                        <div class="body">
                            <p>Please enter your email address below to receive instructions for resetting password.</p>
                            <form class="form-auth-small" action="https://thememakker.com/templates//lucid/hospital/light/index.html">
                                <div class="form-group">                                    
                                    <input type="password" class="form-control" id="signup-password" placeholder="@Email">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">RESET PASSWORD</button>
                                <div class="bottom">
                                    <span class="helper-text">Know your password? <a href="{{route('login')}}">Login</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

<!-- Mirrored from thememakker.com/templates//lucid/hospital/light/page-forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Aug 2018 13:22:03 GMT -->
</html>

