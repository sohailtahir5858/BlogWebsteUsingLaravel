<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/images/favicon.ico" type="image/ico" />

	<title>{{@config('constants.site_name')}}</title>

	<!-- Bootstrap -->
	<link href="{{ asset('/admin_assets/css/bootstrap.min1.css')}}" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="{{ asset('/admin_assets/fonts/css/font-awesome.min.css')}}" rel="stylesheet">
	<!-- iCheck -->
	<link href="{{ asset('/admin_assets/css/green.css')}}" rel="stylesheet">

	<!-- bootstrap-progressbar -->
	<link href="{{ asset('/admin_assets/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
	<!-- Custom Theme Style -->
	<link href="{{ asset('/admin_assets/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Blogs!</span></a>
					</div>
					<div class="clearfix"></div>
					<br />
					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>Menu</h3>
							<ul class="nav side-menu">
								<li><a href="/admin/post"><i class="fa fa-home"></i>Post</a></li>
								<li><a href="/admin/page"><i class="fa fa-android"></i>Pages</a></li>
								<li><a href="/admin/contact"><i class="fa fa-bars"></i>Contact Us</a></li>

								</li>

							</ul>
						</div>

					</div>
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->
					
					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
					<nav class="nav navbar-nav">
						<ul class=" navbar-right">
							<li class="nav-item dropdown open" style="padding-left: 15px;">
								<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
									id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
									Welcome {{session('BLOG_USER_NAME')}}
								</a>
								<div class="dropdown-menu dropdown-usermenu pull-right"
									aria-labelledby="navbarDropdown">
									
									<a class="dropdown-item" href="{{url('/admin/logout')}}"><i class="fa fa-sign-out pull-right"></i>
										Log Out</a>
								</div>
							</li>

							
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					@section('container')
					@show


				</div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
	</div>

	<!-- jQuery -->
	<script src="{{ asset('/admin_assets/js/jquery.min.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('/admin_assets/js/bootstrap.bundle.min.js')}}"></script>
	<!-- FastClick -->
	<script src="{{ asset('/admin_assets/js/fastclick.js')}}"></script>
	<!-- Custom Theme Scripts -->
	<script src="{{ asset('/admin_assets/js/custom.min.js')}}"></script>
	@include('sweetalert::alert')
</body>

</html>