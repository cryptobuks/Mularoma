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
									<h4 class="card-title mb-1">Submit Blog</h4>
									<p class="mb-2"></p>
								</div>
								<div class="card-body pt-0">
									<form class="form-horizontal" action="{{url('blogpost')}}" method="post">
										@csrf
										<div class="form-group">
											<input type="text" class="form-control" name="title" placeholder="Blog Title">
										</div>
										
										<div class="form-group">
										    <textarea name="post" class="form-control" placeholder="Blog Body"></textarea>
											<!--<input type="text" class="form-control" name="title" placeholder="Blog Title">-->
										</div>
										
										
										<div class="form-group mb-0 mt-3 justify-content-end">
											<div>
												<button type="submit" class="btn btn-primary">Submit</button>
												
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
					  <!-- row opened -->
          <div class="row row-sm row-deck">
           
           
           <div class="row row-sm row-deck">       
            <div class="col-md-12 col-lg-12 col-xl-12">
              <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                  <h4 class="card-title mb-1"></h4>
                  <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <span class="tx-12 tx-muted mb-3 ">My Blogs</span>
                <div class="table-responsive country-table">
                  <table class="table table-hover mb-0 text-md-nowrap">
                    <thead>
                      <tr>
                        <th class="wd-lg-25p">Id</th>
                        <th class="wd-lg-25p">Title</th>
                        <th class="wd-lg-25p">Status</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($blogs as $blog)
                      <tr>

                        <td class=" tx-medium tx-inverse">{{$blog->id}} </td>
                        <td class=" tx-medium tx-inverse">{{$blog->title}}</td>
                        <td class=" tx-medium tx-inverse">
                        @if(($blog->status)==0)
                         <button class="btn btn-warning">Pending Approval</button>

                         @elseif(($blog->status)==1)

                        <button class="btn btn-success">Approved</button>

                       

                        

                        @endif
                        </td>
                       
                      </tr>

                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          </div>
          <!-- /row -->
</div>
					@endsection
					<!-- row -->