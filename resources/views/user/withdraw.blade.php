	<!-- row -->
					
	@extends('layouts.main')

  @section('content')
  <div class="container-fluid"><br>
		  	@if (\Session::has('Success'))
                <div class="alert alert-success">
                    {!! \Session::get('Success') !!}
                </div>
            @endif
                                                    
            @if (\Session::has('error'))
                <div class="alert alert-danger">
                    {!! \Session::get('error') !!}
                </div>
            @endif

			<div class="row row-sm">
				<div class="col-lg-4 col-xl-4 col-md-4 col-sm-4">
					<div class="card  box-shadow-0">
						<div class="card-header">
							<h4 class="card-title mb-1">Withdraw from Referals</h4>
							<p class="mb-2">This will be credited to your wallet</p>
						</div>
						<div class="card-body pt-0">
							<form class="form-horizontal" action="{{url('ref/withdraw')}}" method="post">
								@csrf
								<div class="form-group">
									<input type="number" class="form-control" name="amount" placeholder="amount" required>
								</div>
								
								
								<div class="form-group mb-0 mt-3 justify-content-end">
									<div>
										<button type="submit" class="btn btn-primary">Withdraw</button>
										
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-xl-4 col-md-4 col-sm-4">
					<div class="card  box-shadow-0">
						<div class="card-header">
							<h4 class="card-title mb-1">Withdraw from Investment Earnings</h4>
							<p class="mb-2">This will be credited to your wallet</p>
						</div>
						<div class="card-body pt-0">
							<form class="form-horizontal" action="{{url('inv/withdraw')}}" method="post">
								@csrf
								<div class="form-group">
									<input type="number" class="form-control" name="amount" placeholder="amount" required>
								</div>
								
								
								<div class="form-group mb-0 mt-3 justify-content-end">
									<div>
										<button type="submit" class="btn btn-primary">Withdraw</button>
										
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				
				@if((Auth::user()->country)=='KENYA')
				<div class="col-lg-4 col-xl-4 col-md-4 col-sm-4">
					<div class="card  box-shadow-0">
						<div class="card-header">
							<h4 class="card-title mb-1">Withdraw from Wallet </h4>
							<p class="mb-2">This will be credited to your mpesa</p>
						</div>
						<div class="card-body pt-0">
							<form class="form-horizontal" action="{{url('/b2c')}}" method="post">
								@csrf
								<div class="form-group">
									<input type="number" class="form-control" name="amount" placeholder="amount" required>
								</div>
								
								
								<div class="form-group mb-0 mt-3 justify-content-end">
									<div>
										<button type="submit" class="btn btn-primary">Withdraw</button>
										
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				@elseif((Auth::user()->country)=='TANZANIA')
				<div class="col-lg-4 col-xl-4 col-md-12 col-sm-4">
					<div class="card  box-shadow-0">
						<div class="card-header">
							<h4 class="card-title mb-1">Withdraw from Wallet </h4>
							<p class="mb-2">This will be credited to your number</p>
						</div>
						<div class="card-body pt-0">
							<form class="form-horizontal" action="{{url('wallet/withdraw')}}" method="post">
								@csrf
								<div class="form-group">
									<input type="number" class="form-control" name="amount" placeholder="amount" required>
								</div>
								
								
								<div class="form-group mb-0 mt-3 justify-content-end">
									<div>
										<button type="submit" class="btn btn-primary">Withdraw</button>
										
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				@elseif((Auth::user()->country)=='RWANDA')
				<div class="col-lg-4 col-xl-4 col-md-12 col-sm-4">
					<div class="card  box-shadow-0">
						<div class="card-header">
							<h4 class="card-title mb-1">Withdraw from Wallet </h4>
							<p class="mb-2">This will be credited to your number</p>
						</div>
						<div class="card-body pt-0">
							<form class="form-horizontal" action="{{url('wallet/withdraw')}}" method="post">
								@csrf
								<div class="form-group">
									<input type="number" class="form-control" name="amount" placeholder="amount" required>
								</div>
								
								
								<div class="form-group mb-0 mt-3 justify-content-end">
									<div>
										<button type="submit" class="btn btn-primary">Withdraw</button>
										
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				@elseif((Auth::user()->country)=='UGANDA')
				<div class="col-lg-4 col-xl-4 col-md-12 col-sm-4">
					<div class="card  box-shadow-0">
						<div class="card-header">
							<h4 class="card-title mb-1">Withdraw from Wallet </h4>
							<p class="mb-2">This will be credited to your number</p>
						</div>
						<div class="card-body pt-0">
							<form class="form-horizontal" action="{{url('wallet/withdraw')}}" method="post">
								@csrf
								<div class="form-group">
									<input type="number" class="form-control" name="amount" placeholder="amount" required>
								</div>
								
								
								<div class="form-group mb-0 mt-3 justify-content-end">
									<div>
										<button type="submit" class="btn btn-primary">Withdraw</button>
										
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				@else
				<div class="col-lg-4 col-xl-4 col-md-4 col-sm-4">
					<div class="card  box-shadow-0">
						<div class="card-header">
							<h4 class="card-title mb-1">Withdraw from Wallet </h4>
							<p class="mb-2">This will be credited to your number</p>
						</div>
						<div class="card-body pt-0">
							<form class="form-horizontal" action="{{url('wallet/withdraw')}}" method="post">
								@csrf
								<div class="form-group">
									<input type="number" class="form-control" name="amount" placeholder="amount" required>
								</div>
								
								
								<div class="form-group mb-0 mt-3 justify-content-end">
									<div>
										<button type="submit" class="btn btn-primary">Withdraw</button>
										
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			    @endif
			</div>
					
						
						
</div>
					@endsection
					<!-- row -->