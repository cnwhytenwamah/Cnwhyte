@extends('admin.layout.app')
@section('content')	
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
					<h5 class="text-white op-7 mb-2">{{$title}}</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="page-inner mt--5">
		<div class="row mt--2">
			<div class="col-lg-12">
				<div class="card full-height">
					<div class="card-body">
						<div class="card-title">Overall statistics</div>
						<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
							<div class="px-2 pb-2 pb-md-0 text-center">
								<h1>
									<!-- Total Positions -->
								</h1>
								<a href="" class="fw-bold mt-3 mb-0">Total Positions</a>
							</div>
							<div class="px-2 pb-2 pb-md-0 text-center">
								<h1>
									<!-- Total Candidates -->
								</h1>
								<a href="" class="fw-bold mt-3 mb-0">Total Candidates</a>
							</div>
							<div class="px-2 pb-2 pb-md-0 text-center">
								<h1>
									<!-- Total Voters -->
								</h1>
								<a href="" class="fw-bold mt-3 mb-0">Total Voters</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
			
@endsection
			
		
		
		
	
	