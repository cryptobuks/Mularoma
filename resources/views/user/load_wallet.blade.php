<!-- app-content-->
@extends('layouts.main')

@section('content')




      <br>
       
            <?php
            $nji=$user->lastname;
            
            ?>
            
            
					        
          
     
                             
             <div class="row">
                        <div class="col-xl-12">
								<div class="card card-counter bg-gradient-default">
								     <div class="card-header">KENYAN || CONGO DEPOSIT</div>
									<div class="card-body">
										<div class="row">
											
											<div class="col-8 text-center">
												<div class="mt-4 mb-0 text-success">
													<code>USE TILL</code>: 9077883
													
													<p class="text-danger mt-1"></p>			</div>	
													
													</div>
													
											<hr><hr>
										<span class="alert"><a href="https://tinypesa.com/bigtreeinvest.xyz"><code>Click here To Deposit Using STK</code></a></span>
										</div>
											<hr><hr>
										
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
					        
					     
                    
                      <div class="row">
                        <div class="col-xl-12">
								<div class="card card-counter bg-gradient-default">
								    <div class="card-header">RWANDA || TANZANIA || UGANDA ||CONGO</div>
									<div class="card-body">
										<div class="row">
										
											<div class="col-8 text-center">
												<div class="mt-4 mb-0 text-success">
													<h1 class="btn btn-link mb-0"> DEPOSIT BY SENDING TO MPESA; </h1><br>
													<h2 class="btn btn-link mb-0"> MPESA NUMBER : </h2>+254112414043<br>
													<p class="text-danger mt-1">send directly from tigo, airtel, and any other network</p>
												</div> 
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
					        
					        
					        
					                            
                      <div class="row">
                        <div class="col-xl-12">
								<div class="card card-counter bg-gradient-default">
								    <div class="card-header"> WHATSAPP GROUP</div>
									<div class="card-body">
										<div class="row">
										
											<div class="col-8 text-center">
												<div class="mt-4 mb-0 text-success">
													<h1 class="btn btn-link mb-0">  Join Our Official Group </h1><br>
													<h2 class="btn btn-link mb-0"> : </h2><br>https://chat.whatsapp.com/CyphndzZYBeLD52LJK1bjo

										
		<p class="text-danger mt-1">send directly to this airtel account</p>
												</div> 
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>


 
  <!--=================================================-->
 
                 

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">{{ __('Deposit History') }}</div>
                                </div>
                                <div class="card-body pb-0">
                                    <?php
                                        $deps = App\deposits::where('user_id', $user->id)->orderby('id', 'desc')->paginate(10);
                                    ?>                                                   
                                                
                                    <div class="table-responsive">
                                        <table class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>  
                                                <th>{{ __('Amount') }}</th>        
                                                <th>{{ __('Method') }}</th>
                                                <th>{{ __('Account') }}</th>
                                                <th>{{ __('Acc Name') }}</th>
                                                <th>{{ __('Date') }}</th>
                                                <th>{{ __('Status') }}</th>
                                                <th>{{ __('Url') }}</th>                                                                        
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @if(count($deps) > 0 )
                                                @foreach($deps as $dep)
                                                    <tr> 
                                                        <td>{{$settings->currency}} {{$dep->amount}}</td>     
                                                        <td>{{$dep->bank}}</td>
                                                        <td>
                                                           {{$dep->account_no}}
                                                        </td>
                                                        <td>
                                                           {{$dep->account_name}}
                                                        </td>
                                                        <td>{{$dep->created_at}}</td>
                                                        <td>
                                                            @if($dep->status == 0)
                                                                Pending
                                                            @elseif($dep->status == 1)
                                                                Approved
                                                            @elseif($dep->status == 2)
                                                                Rejected
                                                            @endif
                                                        </td> 
                                                        <td>
                                                            @if($dep->bank == 'BTC')
                                                                @if($dep->account_name == 'Coin Base')
                                                                    <a href="{{ route('coinbase.confirm', ['id' => $dep->pop]) }}" target="_blank" class="btn btn-info">Check</a>
                                                                @else
                                                                    <a href="{{ route('btc.confirm', ['id' => $dep->account_name]) }}" target="_blank" class="btn btn-info">Check</a>
                                                                @endif
                                                            @endif
                                                        </td>                                                                       
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>                                                            
                                                    <td colspan="6">{{ __('No data') }}</td>                                        
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                    <div>
                                        {{ $deps->links() }}
                                    </div>           
                                    <br><br>  
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
           
           
            </div>
            
@endSection
            