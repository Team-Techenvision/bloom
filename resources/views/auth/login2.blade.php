<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="" />
  <title>Bloom Admin Template</title>

  <!-- ========== Css Files ========== -->
  <link href="{{asset('css/root.css')}}" rel="stylesheet">
  </head>
  <body style="background-color: #f5f5f5;">

    <div class="login-form">
      <form method="POST" action="{{ route('login') }}">
        <div class="top">
          <img src="img/kode-icon.png" alt="icon" class="icon">
          <h1>Bloom</h1>
          <h4>Admin Template</h4>
        </div>
        <div class="form-area">
          <div class="group">
            <input id="email" type="email" class="form-control" placeholder="Username">
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <input id="password" type="password" class="form-control" placeholder="Password">
            <i class="fa fa-key"></i>
          </div>
          {{-- <div class="checkbox checkbox-primary">
            <input id="checkbox101" type="checkbox" checked>
            <label for="checkbox101"> Remember Me</label>
          </div> --}}
          <button type="submit" class="btn btn-default btn-block">LOGIN</button>
        </div>
      </form>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="#"><i class="fa fa-external-link"></i> Register Now</a></div>
        <div class="col-xs-6 text-right"><a href="#"><i class="fa fa-lock"></i> Forgot password</a></div>
      </div>
    </div>

</body>
</html>