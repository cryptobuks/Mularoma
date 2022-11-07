@extends('layouts.main')

@section('content')

   <!-- new styling -->
   <style>
    .bg-turquoise-gradient {
        background-image: linear-gradient(45deg, #56d6e1, #89e2ea) !important;
    }
    .bg-darkblue-gradient {
        background-image: linear-gradient(45deg, #8b40ea, #a266ee) !important;
    }
    .cashier-buttons > a{
        padding: .7em 1.5em;
        margin: 0 .4em;
        border-radius: 10px;
        color: white;
    }
   </style>
      <!-- /main-header -->

        <!-- container -->
        <div class="container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
          <div class="left-content">
            <div>
              <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Welcome back, {{Auth::user()->username}}</h2>
             
            </div>
          </div>
          <div class="main-dashboard-header-right">
            <!--<div>-->
            <!--  <label class="tx-13">Platform Ratings</label>-->
            <!--  <div class="main-star">-->
            <!--    <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star"></i> <span>(0)</span>-->
            <!--  </div>-->
            <!--</div>-->
            
           
          </div>
        </div>
        <!-- breadcrumb -->
        <div class="d-flex justify-content-center mb-4 cashier-buttons">
            <a href="{{env('APP_URL').'deposit'}}" class="btn-primary">Deposit</a>
            <a href="{{env('APP_URL').'withdraw'}}" class="btn-success">Withdraw</a>
            <a href="{{env('APP_URL').'packages'}}" class="btn-warning">Buy token</a>
            <a href="/{{Auth::user()->username}}/affiliates" class="btn-info">My team</a>
        </div>
        
          <!-- row -->
          <div class="row row-sm">
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-turquoise-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0 d-flex justify-content-between">
                  <div class="">
                      <h6 class="mb-3 tx-12 text-white">Deposited Balance</h6>
                      <div class="pb-0 mt-0">
                        <div class="d-flex">
                          <div class="">
                            <h4 class="tx-20 fw-bold mb-1 text-white">{{Auth::user()->currency}} {{App\Withdraw::where('user_id',Auth::user()->id)->where('destination','mpesa')->sum('amount')}}</h4>
                          </div>
                        </div>
                      </div>
                  </div>
                  <img src="{{asset('images/wallet.svg')}}" alt="icon" style="width: 44px; height: 44px;"/>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-danger-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0 d-flex justify-content-between">
                  <div class="">
                      <h6 class="mb-3 tx-12 text-white">Total Withdrawn</h6>
                      <div class="pb-0 mt-0">
                        <div class="d-flex">
                          <div class="">
                            <h4 class="tx-20 fw-bold mb-1 text-white">{{Auth::user()->currency}} {{App\Investments::where('user_id',Auth::user()->id)->sum('earnings')}}</h4>
                          </div>
                          
                        </div>
                      </div>
                  </div>
                  <img src="{{asset('images/wallet.svg')}}" alt="icon" style="width: 44px; height: 44px;"/>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-success-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0 d-flex justify-content-between">
                  <div class="">
                      <h6 class="mb-3 tx-12 text-white">Main Wallet</h6>
                      <div class="pb-0 mt-0">
                        <div class="d-flex">
                          <div class="">
                            <h4 class="tx-20 fw-bold mb-1 text-white">{{Auth::user()->currency}}  {{Auth::user()->wallet}}</h4>
                          </div>
                        </div>
                      </div>
                  </div>
                  <img src="{{asset('images/wallet.svg')}}" alt="icon" style="width: 44px; height: 44px;"/>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-warning-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0 d-flex justify-content-between">
                  <div class="">
                      <h6 class="mb-3 tx-12 text-white">Referral Earnings</h6>
                      <div class="pb-0 mt-0">
                        <div class="d-flex">
                          <div class="">
                            <h4 class="tx-20 fw-bold mb-1 text-white">{{Auth::user()->currency}} 
        
                            {{Auth::user()->ref_bal}} 
                             
                            </h4>
                            
                          </div>
                          <!--<span class="float-end my-auto ms-auto">-->
                          <!--  <i class="fas fa-arrow-circle-down text-white"></i>-->
                          <!--  <span class="text-white op-7"> -152.3</span>-->
                          <!--</span>-->
                        </div>
                      </div>
                  </div>
                  <img src="{{asset('images/wallet.svg')}}" alt="icon" style="width: 44px; height: 44px;"/>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
              <div class="card overflow-hidden sales-card bg-darkblue-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0 d-flex justify-content-between">
                  <div class="">
                      <h6 class="mb-3 tx-12 text-white">Mature Token Balance</h6>
                      <div class="pb-0 mt-0">
                        <div class="d-flex">
                          <div class="">
                            <h4 class="tx-20 fw-bold mb-1 text-white">{{Auth::user()->currency}} 
        
                            {{Auth::user()->ref_bal}} 
                             
                            </h4>
                            
                          </div>
                          <!--<span class="float-end my-auto ms-auto">-->
                          <!--  <i class="fas fa-arrow-circle-down text-white"></i>-->
                          <!--  <span class="text-white op-7"> -152.3</span>-->
                          <!--</span>-->
                        </div>
                      </div>
                  </div>
                  <img src="{{asset('images/wallet.svg')}}" alt="icon" style="width: 44px; height: 44px;"/>
                </div>
              </div>
            </div>
            
           
          </div>
          <!-- row closed -->

         


            <!-- row opened -->
          <div class="row row-sm row-deck">
           
            <div class="col-md-12 col-lg-12 col-xl-12">
              <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                  <h4 class="card-title mb-1">My referal Link</h4>
                  <!--<i class="mdi mdi-dots-horizontal text-gray"></i>-->
                </div>
                <div class="table-responsive country-table">
                  <!--<table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">-->
                  <!--  <thead>-->
                  <!--    <tr>-->
                       
                      <!--  <th  class="wd-lg-25p">-->
                      <!--   Link-->
                      <!--  </th>-->
                      <!--</tr>-->
                  

                  <!--</thead>-->

                  <!-- <tbody>-->
                  <!--    <tr>-->
                       


                        <p>{{url('/i/am/')}}/{{Auth::user()->username}} 
                        <a href="{{url('/i/am/')}}/{{Auth::user()->username}}" class="btn btn-info" onclick="copyURI(event)"> Copy</a></p>


                       
                      <!--</tr>-->

                      <script type="text/javascript">
                        function copyURI(evt) {
                          evt.preventDefault();
                          navigator.clipboard.writeText(evt.target.getAttribute('href')).then(() => {
                            /* clipboard successfully set */
                            swal("Good job!", "Your Link was copied!", "success");

                          }, () => {
                            /* clipboard write failed */
                            swal("Ooops!", "An error occured!", "error");

                          });
                      }

                      </script>
                      
                <!--    </tbody>-->

                <!--</table>-->
              </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /Container -->
      
      <!-- /main-content -->
@endsection