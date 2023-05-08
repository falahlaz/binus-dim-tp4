<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>TATA KELOLA KINERJA TEKNOLOGI INFORMASI MENGGUNAKAN
IT BALANCED SCORECARD</title>
	<meta name="description" content="TATA KELOLA KINERJA TEKNOLOGI INFORMASI MENGGUNAKAN
IT BALANCED SCORECARD">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
	<link id="base-style" href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link id="base-style-responsive" href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">
	
	<!-- end: CSS -->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="template.php"><span>IT-BSC</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> {{ $session_id }}
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								
								<form action="{{route('auth.logout')}}" method="post">
									@method('post')
									@csrf
									<li><button type="submit"><i class="halflings-icon off"></i> Logout</button></li>
								</form>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
			@include('sidebar')

			<!-- start: Content -->
			<div id="content" class="span10">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{route('template')}}">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Lihat Data Pertanyaan</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Pertanyaan</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No.</th>
								  <th>Pertanyaan</th>
								  <th>Variabel</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							@foreach($questions as $question)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{ $question->pertanyaan }}</td>
									<td class="center">{{ $question->variabel }}</td>
									
									<td class="center">
										<a class="btn btn-success" href="#">
											<i class="halflings-icon white zoom-in"></i>  
										</a>
										<a class="btn btn-info" href="#">
											<i class="halflings-icon white edit"></i>  
										</a>
										<a class="btn btn-danger" href="#">
											<i class="halflings-icon white trash"></i> 
										</a>
									</td>
								</tr>
							@endforeach
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->	
	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">JANUX Responsive Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

	<script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
	<script src="{{ asset('js/jquery-migrate-1.0.0.min.js') }}"></script>
	
		<script src="{{ asset('js/jquery-ui-1.10.0.custom.min.js') }}"></script>
	
		<script src="{{ asset('js/jquery.ui.touch-punch.js') }}"></script>
	
		<script src="{{ asset('js/modernizr.js') }}"></script>
	
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	
		<script src="{{ asset('js/jquery.cookie.js') }}"></script>
	
		<script src="{{ asset('js/fullcalendar.min.js') }}"></script>
	
		<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>

		<script src="{{ asset('js/excanvas.js') }}"></script>
	<script src="{{ asset('js/jquery.flot.js') }}"></script>
	<script src="{{ asset('js/jquery.flot.pie.js') }}"></script>
	<script src="{{ asset('js/jquery.flot.stack.js') }}"></script>
	<script src="{{ asset('js/jquery.flot.resize.min.js') }}"></script>
	
		<script src="{{ asset('js/jquery.chosen.min.js') }}"></script>
	
		<script src="{{ asset('js/jquery.uniform.min.js') }}"></script>
		
		<script src="{{ asset('js/jquery.cleditor.min.js') }}"></script>
	
		<script src="{{ asset('js/jquery.noty.js') }}"></script>
	
		<script src="{{ asset('js/jquery.elfinder.min.js') }}"></script>
	
		<script src="{{ asset('js/jquery.raty.min.js') }}"></script>
	
		<script src="{{ asset('js/jquery.iphone.toggle.js') }}"></script>
	
		<script src="{{ asset('js/jquery.uploadify-3.1.min.js') }}"></script>
	
		<script src="{{ asset('js/jquery.gritter.min.js') }}"></script>
	
		<script src="{{ asset('js/jquery.imagesloaded.js') }}"></script>
	
		<script src="{{ asset('js/jquery.masonry.min.js') }}"></script>
	
		<script src="{{ asset('js/jquery.knob.modified.js') }}"></script>
	
		<script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
	
		<script src="{{ asset('js/counter.js') }}"></script>
	
		<script src="{{ asset('js/retina.js') }}"></script>

		<script src="{{ asset('js/custom.js') }}"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
