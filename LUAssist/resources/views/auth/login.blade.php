<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Login to CHMSU QUIZZ</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="icon" type="image/png" href="/assets/img/logo.png">

</head>

<body>
    <style>
        .login {
            max-width: 512px;
        }
    </style>
    <header class="mt-4">
        <img src="assets/img/bg.png" width="100px" height="auto" alt="" style="display: block; margin: auto;">
    </header>
    <div class="container-fluid">
        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto" style="margin: 20px">
            <h5 class="text-center">Login To LUAssist</h5>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto card">
            <div class="card-body">
                <form action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Username</label>
                        <input id="usr" name="usr" type="text" value="{{ old('usr') }}" class="form-control {{ $errors->has('usr') ? 'is-invalid' : '' }}" required autofocus>
                    </div>
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="">Password</label>
                        <input id="password" name="password" type="password" class="form-control {{ $errors->has('usr') ? 'is-invalid' : '' }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('usr') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btnstyle">Login</button>       
                    </div>
                    <p class="text-center text-muted">
                        Don't have an account?
                        <a href="/">Register here!</a>
                    </p>
                </form>
            </div>

        </div>
</body>

</html>