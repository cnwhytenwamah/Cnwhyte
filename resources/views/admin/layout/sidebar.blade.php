<!-- Sidebar -->
	<div class="sidebar sidebar-style-2">			
		<div class="sidebar-wrapper scrollbar scrollbar-inner">
			<div class="sidebar-content">
				<div class="user">
					<div class="avatar-sm float-left mr-2">
						<img src="{{asset('assets/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
					</div>
					<div class="info">
						<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
							<span>
								Hizrian
								<span class="user-level">Administrator</span>
							</span>
						</a>
						<div class="clearfix"></div>
					</div>
				</div>
				<ul class="nav nav-primary">
					<li class="nav-item active">
						<a  href="{{route('admin.dashboard')}}">
							<i class="fas fa-tachometer-alt"></i>
							<p>Dashboard</p>
						</a>
					</li>
					<li class="nav-section">
						<span class="sidebar-mini-icon">
							<i class="fa fa-ellipsis-h"></i>
						</span>
						<h4 class="text-section">Menus</h4>
					</li>
					<li class="nav-item">
						<a data-toggle="collapse" href="#base">
							<i class="fas fa-newspaper"></i>
							<p>Blogs</p>
							<span class="caret"></span>
						</a>
						<div class="collapse" id="base">
							<ul class="nav nav-collapse">
								<li>
									<a href="{{route('admin.add-blog')}}">
										<span class="sub-item">Add Blogs</span>
									</a>
								</li>
								<li>
									<a href="">
										<span class="sub-item">List Blogs</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a data-toggle="collapse" href="#sidebarLayouts">
							<i class="fas fa-users"></i>
							<p>Candidates</p>
							<span class="caret"></span>
						</a>
						<div class="collapse" id="sidebarLayouts">
							<ul class="nav nav-collapse">
								<li>
									<a href="">
										<span class="sub-item">Add Candidate</span>
									</a>
								</li>
								<li>
									<a href="">
										<span class="sub-item">List Candidates</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a data-toggle="collapse" href="#forms">
							<i class="fas fa-users"></i>
							<p>Voters</p>
							<span class="caret"></span>
						</a>
						<div class="collapse" id="forms">
							<ul class="nav nav-collapse">
								<li>
									<a href="">
										<span class="sub-item">Add Voters</span>
									</a>
								</li>
								<li>
									<a href="">
										<span class="sub-item">List Voters</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a data-toggle="collapse" href="#tables">
							<i class="fas fa-check"></i>
							<p>Election Votes</p>
							<span class="caret"></span>
						</a>
						<div class="collapse" id="tables">
							<ul class="nav nav-collapse">
								<li>
									<a href="tables/tables.html">
										<span class="sub-item">View Votes</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					
					<li class="mx-4 mt-2">
						<a href="" class="btn btn-primary btn-block">Logout</a> 
					</li>
				</ul>
			</div>
		</div>
	</div>
<!-- End Sidebar -->