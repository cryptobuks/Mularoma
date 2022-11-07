@extends('layouts.main')

  @section('content')

<div class="container-fluid"><br>
  <!-- row -->
				<div class="row">
				@if(Auth::user()->country=='KENYA')
					@foreach($packages as $package)
					
				
					<div class="col-xs-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="panel price panel-color">
							<div class="panel-heading bg-primary p-0 text-center">
								<h3>{{$package->package_name}}</h3>
							</div>
							<div class="panel-body text-center">
								<p class="lead"><strong>{{$package->percent}}%</strong> daily</p>
							</div>
							<ul class="list-group list-group-flush text-center">
								<li class="list-group-item"><strong> Min </strong>{{Auth::user()->currency}} {{$package->min}}</li>
								<li class="list-group-item"><strong>Max </strong>{{Auth::user()->currency}} {{$package->max}}</li>
								<li class="list-group-item"><strong> Duration </strong> {{$package->duration}} days</li>
								<li class="list-group-item"><strong> Money </strong> BackGuarantee</li>
								<li class="list-group-item border-bottom-0"><strong> 24/7</strong> support</li>
							</ul>
							<div class="panel-footer text-center">
								<a class="btn btn-primary" href="/package/{{$package->id}}">Invest Now</a>
							</div>
						</div>
					</div><!-- COL-END -->
					@endforeach
					
				@else
				
					@foreach($packages as $package)
				    <div class="col-xs-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="panel price panel-color">
							<div class="panel-heading bg-primary p-0 text-center">
								<h3>{{$package->package_name}}</h3>
							</div>
							<div class="panel-body text-center">
								<p class="lead"><strong>{{$package->percent}}%</strong> daily</p>
							</div>
							<ul class="list-group list-group-flush text-center">
								<li class="list-group-item"><strong> Min </strong>{{Auth::user()->currency}} {{$package->min/env('usd')}}</li>
								<li class="list-group-item"><strong>Max </strong>{{Auth::user()->currency}} {{$package->max/env('usd')}}</li>
								<li class="list-group-item"><strong> Duration </strong> {{$package->duration}} days</li>
								<li class="list-group-item"><strong> Money </strong> BackGuarantee</li>
								<li class="list-group-item border-bottom-0"><strong> 24/7</strong> support</li>
							</ul>
							<div class="panel-footer text-center">
								<a class="btn btn-primary" href="/package/{{$package->id}}">Invest Now</a>
							</div>
						</div>
					</div><!-- COL-END -->
					@endforeach
				@endif
				</div>
				<!-- /row -->

			</div>

  @endsection