@extends('layouts.main')

  @section('content')
    @if(Auth::user()->country=='KENYA')
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
					@foreach($packages as $package)
					<div class="row row-sm">
						<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
							<div class="card  box-shadow-0">
								<div class="card-header">
									<h4 class="card-title mb-1">{{$package->package_name}}</h4>
									<p class="mb-2">Invest in the {{$package->package_name}}.<br><br> Minimum investment is <b>{{$package->min}}</b>.<br><br>Maximum investment is <b>{{$package->max}}</b></p>
								</div>
								<div class="card-body pt-0">
									<form class="form-horizontal" action="{{url('invest')}}" method="post">
										@csrf
										<input type="hidden" name="package" value="{{$package->id}}">
										<div class="form-group">
											<input type="text" class="form-control" name="amount" placeholder="Amount you wish to invest in {{Auth::user()->currency}}">
										</div>
										
										
										<div class="form-group mb-0 mt-3 justify-content-end">
											<div>
												<button type="submit" class="btn btn-primary">Invest</button>
												
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
					
				

					@endforeach
					
</div>

    @else
    
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
					@foreach($packages as $package)
					<div class="row row-sm">
						<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
							<div class="card  box-shadow-0">
								<div class="card-header">
									<h4 class="card-title mb-1">{{$package->package_name}}</h4>
									<p class="mb-2">Invest in the {{$package->package_name}}.<br><br> Minimum investment is <b>{{Auth::user()->currency}} {{$package->min/env('usd')}}</b>.<br><br>Maximum investment is <b>{{Auth::user()->currency}} {{$package->max/env('usd')}}</b></p>
								</div>
								<div class="card-body pt-0">
									<form class="form-horizontal" action="{{url('invest')}}" method="post">
										@csrf
										<input type="hidden" name="package" value="{{$package->id}}">
										<div class="form-group">
											<input type="text" class="form-control" name="amount" placeholder="Amount you wish to invest in {{Auth::user()->currency}}">
										</div>
										
										
										<div class="form-group mb-0 mt-3 justify-content-end">
											<div>
												<button type="submit" class="btn btn-primary">Invest</button>
												
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
					
				

					@endforeach
					
</div>

	@endif
			

  @endsection