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
				<a class="brand" href="{{ route('template') }}"><span>IT-BSC</span></a>
								
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
					<a href="{{ route('template') }}">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>

				
			<div class="row-fluid">
				
				<div class="widget red span3" onTablet="span4" onDesktop="span3">
					
					<h3><span class="glyphicons globe"><i></i></span>CORPORATE CONTRIBUTION</h3>
					
					<hr>
					
					<div class="content">
						
						<div class="verticalChart">
							@foreach($answers->demension1 as $answer)
								<div class="singleBar">
								
									<div class="bar">
									
										<div class="value">
											<span>{{ $answer->jumlah }}</span>
										</div>
									
									</div>
									
									<div class="title">{{ $answer->jawaban }}</div>
									
								</div>
							@endforeach
							<div class="clearfix"></div>
							
						</div>
					
					</div>
					
				</div><!--/span-->
				
				<div class="widget blue span3" onTablet="span4" onDesktop="span3">
					
					<h3><span class="glyphicons magic"><i></i></span>STAKEHOLDER ORIENTATION</h3>
					
					<hr>
					
					<div class="content">
						
						<div class="verticalChart">
							@foreach($answers->demension2 as $answer)
								<div class="singleBar">
								
									<div class="bar">
									
										<div class="value">
											<span>{{ $answer->jumlah }}</span>
										</div>
									
									</div>
									
									<div class="title">{{ $answer->jawaban }}</div>
									
								</div>
							@endforeach
							<div class="clearfix"></div>
							
						</div>
					
					</div>
					
				</div><!--/span-->
				
				<div class="widget yellow span3" onTablet="span4" onDesktop="span3">
					
					<h3><span class="glyphicons pie_chart"><i></i></span>OPERATIONAL EXCELLENCE</h3>
					
					<hr>
					
					<div class="content">
						
						<div class="verticalChart">
							@foreach($answers->demension3 as $answer)
								<div class="singleBar">
								
									<div class="bar">
									
										<div class="value">
											<span>{{ $answer->jumlah }}</span>
										</div>
									
									</div>
									
									<div class="title">{{ $answer->jawaban }}</div>
									
								</div>
							@endforeach
							<div class="clearfix"></div>
							
						</div>
					
					</div>
					
				</div><!--/span-->

				<div class="widget green span3" onTablet="span4" onDesktop="span3">
					
					<h3><span class="glyphicons snowflake"><i></i></span>FUTURE ORIENTATION</h3>
					
					<hr>
					
					<div class="content">
						
						<div class="verticalChart">
							@foreach($answers->demension4 as $answer)
								<div class="singleBar">
								
									<div class="bar">
									
										<div class="value">
											<span>{{ $answer->jumlah }}</span>
										</div>
									
									</div>
									
									<div class="title">{{ $answer->jawaban }}</div>
									
								</div>
							@endforeach
							<div class="clearfix"></div>
							
						</div>
					
					</div>
					
				</div><!--/span-->

			<div class="row-fluid hideInIE8 circleStats">
				
				<div class="span3" onTablet="span4" onDesktop="span3">
                	<div class="circleStatsItemBox yellow">
						<div class="header">CORPORATE CONTRIBUTION</div>
						<span class="percent">percent</span>
						<div class="circleStat">
                    		<input type="text" value="{{ $kpis->kpi1->kpi }}" class="whiteCircle" />
						</div>		
						<div class="footer">
							<span class="count">
								<span class="unit">{{ $kpis->kpi1->summary }}</span>
								
							</span>
							
						</div>
                	</div>
				</div>

				<div class="span3" onTablet="span4" onDesktop="span3">
                	<div class="circleStatsItemBox green">
						<div class="header">STAKEHOLDER ORIENTATION</div>
						<span class="percent">percent</span>
						<div class="circleStat">
                    		<input type="text" value="{{ $kpis->kpi2->kpi }}" class="whiteCircle" />
						</div>		
						<div class="footer">
							<span class="count">
								<span class="unit">{{ $kpis->kpi2->summary }}</span>
								
							</span>
							
						</div>
                	</div>
				</div>

				<div class="span3" onTablet="span4" onDesktop="span3">
                	<div class="circleStatsItemBox red">
						<div class="header">OPERATIONAL EXCELLENCE </div>
						<span class="percent">percent</span>
						<div class="circleStat">
                    		<input type="text" value="{{ $kpis->kpi3->kpi }}" class="whiteCircle" />
						</div>		
						<div class="footer">
							<span class="count">
								<span class="unit">{{ $kpis->kpi3->summary }}</span>
								
							</span>
							
						</div>
                	</div>
				</div>

				<div class="span3 noMargin" onTablet="span4" onDesktop="span3">
                	<div class="circleStatsItemBox pink">
						<div class="header">FUTURE ORIENTATION</div>
						<span class="percent">percent</span>
						<div class="circleStat">
                    		<input type="text" value="{{ $kpis->kpi4->kpi }}" class="whiteCircle" />
						</div>		
						<div class="footer">
							<span class="count">
								<span class="unit">{{ $kpis->kpi4->summary }}</span>
								
							</span>
							
						</div>
                	</div>
				</div>

				
						
			</div>		
			
			
			
       

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
