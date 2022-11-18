<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="menu-title"><span>Main</span></li>
				<li class="<?= $this->uri->segment(1) == 'schools' ? 'active' : '' ?>">
					<a href="<?= base_url('schools') ?>"><i data-feather="home"></i> <span>Schools</span></a>
				</li>
				
			</ul>
		</div>
	</div>
</div>
<!-- /Sidebar -->
