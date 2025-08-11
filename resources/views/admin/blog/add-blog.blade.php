@extends('admin.layout.app')

@section('content')	
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Add Blog</h2>
					<h5 class="text-white op-7 mb-2">{{ $title }}</h5>
				</div>
			</div>
		</div>
	</div>

	<div class="page-inner mt--5"> 
		<div class="row mt--2 justify-content-start align-items-center" style="min-height: 80vh;">
			<div class="col-lg-12">
				<div class="card full-height">
					<div class="card-body">
						<div class="card-title text-center">Create Blog Post</div>

						<form action="" method="POST" enctype="multipart/form-data">
							@csrf

							<div class="row">
								<div class="col-lg-6 col-12">
									<div class="form-group">
										<label for="title">Title</label>
										<input type="text" class="form-control" id="title" name="title" placeholder="Enter Blog Title" required>
									</div>

									<div class="form-group">
										<label for="excerpt">Short Excerpt</label>
										<textarea class="form-control" id="excerpt" name="excerpt" rows="3" placeholder="Enter a short excerpt" required></textarea>
									</div>

									<div class="form-group">
										<label for="content">Full Blog Content</label>
										<textarea class="form-control" id="content" name="content" rows="6" placeholder="Enter full blog content" required></textarea>
									</div>
								</div>

								<div class="col-lg-6 col-12">
									<div class="form-group">
										<label for="cover_image">Upload Cover Image</label>
										<input type="file" class="form-control" id="cover_image" name="cover_image" accept="image/*">
									</div>

									<div class="form-group">
										<label for="published_at">Publish Date</label>
										<input type="date" class="form-control" id="published_at" name="published_at">
									</div>
								</div>
							</div>

							<div class="text-start mt-4">
								<button type="submit" class="btn btn-primary">Publish Blog</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>	
	</div>
@endsection