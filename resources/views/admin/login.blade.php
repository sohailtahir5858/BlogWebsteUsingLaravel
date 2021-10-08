<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Blog</title>

    <!-- Bootstrap -->
	<link href="{{ asset('admin_assets/css/bootstrap.min1.css')}}" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="{{ asset('admin_assets/fonts/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <!-- Animate.css -->
    <link href="{{ asset('admin_assets/css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin_assets/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="/admin/login_submit" method="post">
             {{@csrf_field()}}
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" name="email" placeholder="Email" required />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required password />
              </div>
              <div>
                <input type="submit" name="submit" class="btn  btn-primary submit" value="Submit" />
                <span>
                  {{session('msg')}}
              </div>

              <div class="clearfix"></div>

            
            </form>
          </section>
        </div>

        
      </div>
    </div>
    @include('sweetalert::alert')
  </body>
</html>
