	<!-- row -->
					
	@extends('layouts.main')

  @section('content')
  <div class="container-fluid"><br>
			  		@if(session()->has('error'))
					    <div class="alert alert-danger">
					        {{ session()->get('error') }}
					    </div>
					@endif
						@if(session()->has('success'))
					    <div class="alert alert-success">
					        {{ session()->get('success') }}
					    </div>
					@endif

					<div class="row row-sm">
						<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
							<div class="card  box-shadow-0">
								<div class="card-header">
									<h4 class="card-title mb-1">Pay for client</h4>
									<p class="mb-2">Pay for the client of your choice</p>
								</div>
								<div class="card-body pt-0">
									<form class="form-horizontal" action="{{url('paypost')}}" method="post">
										@csrf
										<div class="form-group">
											<input type="text" class="form-control" name="cusername" placeholder="Client userName">
										</div>
										
										
										<div class="form-group mb-0 mt-3 justify-content-end">
											<div>
												<button type="submit" class="btn btn-primary">Pay</button>
												
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
</div>
					@endsection
					<!-- row -->