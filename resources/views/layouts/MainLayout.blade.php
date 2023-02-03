<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Project</title>
  <!-- theme meta -->
  <meta name="theme-name" content="novena" />
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/logo.png" />
  <!--
  Essential stylesheets
  =====================================-->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/icofont/icofont.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick-theme.css')}}">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  @yield('headLink')
</head>
<body id="top">
<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item">นายพีรวัส วงศ์เมฆ 6320501596</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
			<a class="navbar-brand" href="{{ url('firstPage') }}">
				<img src="{{ asset('images/logo.png')}}" alt="" class="img-fluid">
			</a>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
				aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icofont-navigation-menu"></span>
			</button>
            @yield('header')
		</div>
	</nav>
</header>


<!--
    Content-body
    =====================================-->

<div class="content-body">
    @yield('content')
</div>


    <!--
    Essential Scripts
    =====================================-->
    <script src="{{ asset('plugins/jquery/jquery.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('plugins/slick-carousel/slick/slick.min.js')}}"></script>
    <script src="{{ asset('plugins/shuffle/shuffle.min.js')}}"></script>
    <script src="{{ asset('js/script.js')}}"></script>
    @yield('script')
  </body>
  </html>
