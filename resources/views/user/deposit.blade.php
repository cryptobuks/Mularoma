	<!-- row -->
					
	@extends('layouts.main')

  @section('content')
  <script src="https://www.paypal.com/sdk/js?client-id=Aa6AIwYo9q4A6WYkMLhYgSKXHnFURGfxZQKN0-o7ghDzWXC7H7X3i2EQXvbFfX5ZjCBNx6-bGDLdUYw5&currency=USD"></script>

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
						<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
							<div class="card  box-shadow-0">
								<div class="card-header">
									<h4 class="card-title mb-1">Deposit</h4>
									<p class="mb-2">This will be credited to your wallet</p>
								</div>
								<div class="card-body pt-0">
								     @if((Auth::user()->country)=='KENYA')
									<form class="form-horizontal" action="{{url('/c2b')}}" method="post">
										@csrf
										
										<div class="form-group">
											<input type="text" class="form-control" name="phone" value="{{Auth::user()->phone}}" readonly>
										</div>
										<div class="form-group">
											<input type="number" class="form-control" name="amount" placeholder="amount" required>
										</div>
										<input type="hidden" name="account" value="dp#{{Auth::user()->id}}">
										
										
										<div class="form-group mb-0 mt-3 justify-content-end">
											<div>
												<button type="submit" class="btn btn-primary">Deposit</button>
												
											</div>
										</div>
									</form>
								
								
									
									    <div class="count">
                                                @elseif((Auth::user()->country)=='TANZANIA')
                                                	<div class="form-group">
                											<input type="number" class="form-control" id="amount" placeholder="amount" required>
                									</div>
                                                
                                                <div class="alert alert-success" >
                                                   <p>-using vodacom <br>
                                                    -Dial *150*00#<br>
                                                    -send your amount to mpesa Kenya on your vodacom line<br>
                                                    -phone number +254703854853 NAHAMAN KAVYATI MUSOMBA </p>
                                                    <a href="https://wa.link/yfvtbd">Click here If you made payment</a>
                                                 </div>
                                                 
                                                  <input type="hidden" value="{{env('au')}}" id="au">
                                                        <div class="main-signup-header">
                                                            <!-- Set up a container element for the button -->
                                                             <div id="paypal-button-container"></div>
        
                                                        </div>
                                                @elseif((Auth::user()->country)=='RWANDA')
                                                
                                                	<div class="form-group">
                											<input type="number" class="form-control" id="amount" placeholder="amount" required>
                									</div>
                                                
                                                <div class="alert alert-success" >
                                                   <p>-using MTN <br>
                                                    -Dial *830#<br>
                                                    -send your amount to mpesa Kenya on your MTN line<br>
                                                    -phone number +254703854853 NAHAMAN KAVYATI MUSOMBA </p>
                                                    <a href="https://wa.link/yfvtbd">Click here If you made payment</a>
                                                 </div>
                                                 
                                                  <input type="hidden" value="{{env('au')}}" id="au">
                                                        <div class="main-signup-header">
                                                            <!-- Set up a container element for the button -->
                                                             <div id="paypal-button-container"></div>
        
                                                        </div>
                                                @elseif((Auth::user()->country)=='UGANDA')
                                                
                                                	<div class="form-group">
                											<input type="number" class="form-control" id="amount" placeholder="amount" required>
                									</div>
                                                <div class="alert alert-success" >
                                                   <p>-using MTN <br>
                                                    -Dial *165#<br>
                                                    -send your amount to mpesa Kenya on your MTN line<br>
                                                    -phone number +254703854853 NAHAMAN KAVYATI MUSOMBA </p>
                                                    
                                                    <a href="https://wa.link/yfvtbd">Click here If you made payment</a>
                                                 </div>
                                                 
                                                  <input type="hidden" value="{{env('au')}}" id="au">
                                                        <div class="main-signup-header">
                                                            <!-- Set up a container element for the button -->
                                                             <div id="paypal-button-container"></div>
        
                                                        </div>
                                                        
                                                @else
                                                	<div class="form-group">
											<input type="number" class="form-control" id="amount" placeholder="amount" required>
									</div>
                                                
                                                 <div class="alert alert-success" >
                                                   <p>Kindly send Bitcoins worth your amount for account deposit to Bitcoin address below. </p><br>
                                                   
                                                   <b>3JyN4x1itezsau4fZGEVw8e86yQ6An9VSN</b><br><br>
                                                   
                                                   <p>Note : copy the address well. 

                                                    <br>Incase your account doesn't activate, contact us with your account username and phone number. 
                                                    
                                                    <br>WhatsApp customer care via  +254101553721 
                                                    <br>Or email elshadaigtinvestment@gmail.com</p>
                                                 </div>
                                                 
                                                
                                               
                                                </div>
                                    
                                    @endif
									
								</div>
							</div>
						</div>
					</div>
					
					
					
					
</div>

                      <script>
      paypal.Buttons({

        // Sets up the transaction when a payment button is clicked
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
               value: document.getElementById('amount').value
              }
            }]
          });
        },

        // Finalize the transaction after payer approval
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];
                alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
                
                
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "https://deploy.elshadaigtinvestment.org/api/v1/response", true);
                    xhr.setRequestHeader('Content-Type', 'application/json');
                    xhr.send(JSON.stringify({
                         TransactionType:"paypal",
                         TransID:transaction.id,
                         TransTime:transaction.create_time,
                         TransAmount:document.getElementById('amount').value,
                         BusinessShortCode:1212,
                         BillRefNumber:"dp#{{Auth::user()->id}}",
                         InvoiceNumber:"0",
                         ThirdPartyTransID:"0",
                         MSISDN:"254709895177",
                         FirstName:"John",
                         MiddleName:"Doe",
                         LastName:"Mike"
                    }));
                

            // When ready to go live, remove the alert and show a success message within this page. For example:
            // var element = document.getElementById('paypal-button-container');
            // element.innerHTML = '';
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');

    </script>
					@endsection
					<!-- row -->