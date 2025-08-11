@extends('admin.layout.app')

@section('content')	
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">List Blogs</h2>
					<h5 class="text-white op-7 mb-2">{{ $title }}</h5>
				</div>
			</div>
		</div>
	</div>

	<div class="page-inner mt--5"> 
		<div class="row mt--2">
			<div class="col-lg-12">
				<div class="card full-height">
					<div class="card-body">
						<div class="card-title">List of Blogs</div>

						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead class="thead-dark">
									<tr>
										<th>#</th>
										<th>Cover Image</th>
										<th>Title</th>
										<th>Excerpt</th>
										<th>Content</th>
										<th>Publish Date</th>
									</tr>
								</thead>
								<tbody>
									@php $sn = 1; @endphp
									@forelse($blogs as $blog)
										<tr>
											<td>{{ $sn++ }}</td>
											<td>
												<img src="{{ asset('storage/' . $blog->cover_image) }}" 
													alt="{{ $blog->title }}" 
													width="60" 
													class="img-thumbnail">
											</td>
											<td>{{ $blog->title }}</td>
											<td>{{ Str::limit($blog->excerpt, 40) }}</td>
											<td>{{ Str::limit(strip_tags($blog->content), 40) }}</td>
											<td>{{ $blog->published_at ? $blog->published_at->format('M d, Y') : '—' }}</td>
										</tr>
									@empty
										<tr>
											<td colspan="6" class="text-center">No blogs available at the moment.</td>
										</tr>
									@endforelse
								</tbody>
							</table>
						</div>

					</div>
				</div>
			</div>
		</div>	
	</div>
@endsection
