<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Un plateforme e-santé pour la gestion des dossiers vaccinals des enfants</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">    
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
   
</head>

<body>
   
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>Connectez vous </h3>
				<p>Un platefore e-santé pour la gestion de vaccination des enfants</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                            <div class="form-group-inner  {{ $errors->has('email') ? ' input-with-error' : '' }}">
                                <label class="control-label" for="email">{{ __('E-Mail Address') }}</label>
                                <input type="text" placeholder="exemple@gmail.com" title="Please enter you username" required="" value="" name="email" id="username" class="form-control">
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group-inner  {{ $errors->has('password') ? ' input-with-error' : '' }}">
                                    <label class="control-label" for="password">Mot de passe</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                
                                @else
                                    <span class="help-block small">svp entrez votre mot de passe</span>
                                @endif
                            </div>
                                          
                            </div>
                            <button class="btn btn-success btn-block loginbtn">Login</button>
                          
                        </form>
                    </div>
                </div>
			</div>
			@include('layouts.partials.footer')
		</div>   
    </div>
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    
</body>

</html>