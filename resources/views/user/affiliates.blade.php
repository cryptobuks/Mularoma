 <!-- row opened -->

 @extends('layouts.main')

  @section('content')
   <div class="container-fluid">
      <br>
          <div class="row row-sm row-deck">
           
            <div class="col-md-12 col-lg-12 col-xl-12">
              <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                  <h4 class="card-title mb-1">Level 1</h4>
                  <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <span class="tx-12 tx-muted mb-3 ">This is your Level one downlines</span>
                <div class="table-responsive country-table">
                  <table class="table table-hover mb-0 text-md-nowrap">
                    <thead>
                      <tr>
                        <th class="wd-lg-25p">Username</th>
                        <th class="wd-lg-25p tx-right">Phone Number</th>
                        <th class="wd-lg-25p tx-right">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($refs as $ref)
                      <tr>
                        <td>{{$ref->username}}</td>
                        <td class="tx-right tx-medium tx-inverse">{{$ref->phone}}</td>
                        <td class="tx-right tx-medium tx-inverse">
                        @if(($ref->status)==1)
                         <button class="btn btn-warning">Pending</button>

                         @elseif(($ref->status)==2)

                        <button class="btn btn-success">Active</button>

                       

                        </td>

                        @endif
                       
                      </tr>

                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>



          <br>

           <div class="row row-sm row-deck">       
            <div class="col-md-12 col-lg-12 col-xl-12">
              <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                  <h4 class="card-title mb-1">Level 2</h4>
                  <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <span class="tx-12 tx-muted mb-3 ">This is your Level two downlines</span>
                <div class="table-responsive country-table">
                  <table class="table table-hover mb-0 text-md-nowrap">
                    <thead>
                      <tr>
                        <th class="wd-lg-25p">Username</th>
                        <th class="wd-lg-25p tx-right">Phone Number</th>
                        <th class="wd-lg-25p tx-right">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($level_twos as $level_two)
                      <tr>
                        <td>{{$level_two->username}}</td>
                        <td class="tx-right tx-medium tx-inverse">{{$level_two->phone}}</td>
                        <td class="tx-right tx-medium tx-inverse">
                        @if(($level_two->status)==1)
                         <button class="btn btn-warning">Pending</button>

                         @elseif(($level_two->status)==2)

                        <button class="btn btn-success">Active</button>

                       

                        </td>

                        @endif
                       
                      </tr>

                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


           <br>

           <div class="row row-sm row-deck">       
            <div class="col-md-12 col-lg-12 col-xl-12">
              <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                  <h4 class="card-title mb-1">Level 3</h4>
                  <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <span class="tx-12 tx-muted mb-3 ">This is your Level three downlines</span>
                <div class="table-responsive country-table">
                  <table class="table table-hover mb-0 text-md-nowrap">
                    <thead>
                      <tr>
                        <th class="wd-lg-25p">Username</th>
                        <th class="wd-lg-25p tx-right">Phone Number</th>
                        <th class="wd-lg-25p tx-right">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($level_threes as $level_three)
                      <tr>
                        <td>{{$level_three->username}}</td>
                        <td class="tx-right tx-medium tx-inverse">{{$level_three->phone}}</td>
                        <td class="tx-right tx-medium tx-inverse">
                        @if(($level_three->status)==1)
                         <button class="btn btn-warning">Pending</button>

                         @elseif(($level_three->status)==2)

                        <button class="btn btn-success">Active</button>

                       

                        </td>

                        @endif
                       
                      </tr>

                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

           
        </div>

      @endsection
          <!-- /row -->