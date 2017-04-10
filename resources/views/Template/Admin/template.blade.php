<!DOCTYPE html>
<html>
<head>
	@include('Template/Admin/header')
	<title>@yield('title')</title>
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">
	<header class="main-header">
	    <!-- Logo -->
	    <a href="../../index2.html" class="logo">
	      <!-- mini logo for sidebar mini 50x50 pixels -->
	      <span class="logo-mini"><b>A</b>LT</span>
	      <!-- logo for regular state and mobile devices -->
	      <span class="logo-lg"><b>Admin</b>LTE</span>
	    </a>
	    <!-- Header Navbar: style can be found in header.less -->
	    <nav class="navbar navbar-static-top">
	      <!-- Sidebar toggle button-->
	      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </a>

	      <div class="navbar-custom-menu">
	        <ul class="nav navbar-nav">
				<li><a href="#">Sign out</a></li>
	        </ul>
	      </div>
	    </nav>
	</header>

	<!-- =============================================== -->

  	<!-- Left side column. contains the sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu">
				<li><a href="#"><i class="fa fa-book"></i> <span>Paket</span></a></li>
				<li><a href="#"><i class="fa fa-book"></i> <span>Lokasi</span></a></li>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>
	@yield('content')
	<!-- =============================================== -->

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		  <h1>
		    Fixed Layout
		    <small>Blank example to the fixed layout</small>
		  </h1>
		  <ol class="breadcrumb">
		    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		    <li><a href="#">Layout</a></li>
		    <li class="active">Fixed</li>
		  </ol>
		</section>

		<!-- Main content -->
		<section class="content">0
			@yield('content')
		</section>
	<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>Version</b> 2.3.8
		</div>
		<strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
		reserved.
	</footer>
</div>
@include('Template/Admin/footer')
</body>
</html>