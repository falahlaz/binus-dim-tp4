
<!-- start: Main Menu -->
<div id="sidebar-left" class="span2">
	<div class="nav-collapse sidebar-nav">
		<ul class="nav nav-tabs nav-stacked main-menu">
			<li><a href="{{ route('template') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
			<li>
				<a class="dropmenu" href="#"><i class="icon-envelope"></i><span class="hidden-tablet"> Dimensi</span> <span class="label label-important">  2 </span></a>
				<ul>
					<li><a class="submenu" href="{{ route('dimension.index') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Lihat Data</span></a></li>
					<li><a class="submenu" href="{{ route('dimension.create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Tambah Data</span></a></li>
				</ul>	
			</li>
			<li>
				<a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> Pertanyaan</span> <span class="label label-important">  2 </span></a>
				<ul>
					<li><a class="submenu" href="{{ route('question.index') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Lihat Data</span></a></li>
					<li><a class="submenu" href="{{ route('question.create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Tambah Data</span></a></li>
				</ul>	
			</li>
			<li>
				<a class="dropmenu" href="#"><i class="icon-folder-open"></i><span class="hidden-tablet"> Pengguna</span> <span class="label label-important">  2 </span></a>
				<ul>
					<li><a class="submenu" href="{{ route('user.index') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Lihat Data</span></a></li>
					<li><a class="submenu" href="{{ route('user.create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Tambah Data</span></a></li>
				</ul>	
			</li>
			<li><a href="{{ route('question.questionnaire') }}"><i class="icon-edit"></i><span class="hidden-tablet"> Jawab Kuesioner</span></a></li>
			
		</ul>
	</div>
</div>
<!-- end: Main Menu -->