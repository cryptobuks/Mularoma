<?php

namespace App\Http\Controllers;
use App\Activations;
use App\User;
use App\Earnings;
use App\Expenditure;
use App\InvPackages;
use App\Investments;
use App\mobilepayments;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Jobs\Investment;
use Validator;
use Mail;
use App\Mail\Referals;
use App\Mail\Activation;
use Hackdelta\Mpesa\Mpesa;
use Hackdelta\Mpesa\Main\MpesaConfig;
use Hackdelta\Mpesa\Extras\MpesaConstants;
use Hackdelta\Mpesa\Exceptions\MpesaInternalException;
use Hackdelta\Mpesa\Exceptions\MpesaClientExceptions;
use Hackdelta\Mpesa\Exceptions\MpesaServerException;


class ApiController extends Controller
{
    //
    
    public function access(){
        
        date_default_timezone_set('Africa/Nairobi');
            // input your unique consumer key and secret provide on your APP
              $consumer_key = '0Ci4gw2qrNaMEAAzKIAAckLVSpDdTDNZ';
              $consumer_secret = 'ddvyhxx2mOAKWcwi';
            
            $headers=['Content-Type:application/json; charset-utf8'];
              $url_access_token = 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
              $curl = curl_init( $url_access_token);
              curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($curl, CURLOPT_HEADER, false);
              curl_setopt($curl, CURLOPT_USERPWD, $consumer_key.':'.$consumer_secret);
             $result=curl_exec($curl);
             $status=curl_getinfo($curl, CURLINFO_HTTP_CODE);
             $result=json_decode($result);
             $access_token= $result->access_token;
      
              
    }
    
     public function with(Request $request){
         
         $amount=$request->amount;
         $mobile=$request->mobile;
         
         
            $config = new MpesaConfig(
      [
         // API Credentials
         'consumer_key'    => '0Ci4gw2qrNaMEAAzKIAAckLVSpDdTDNZ',
         'consumer_secret' => 'ddvyhxx2mOAKWcwi',

         // Environment
         'environment' => 'production', 
         
         // Short code
         'short_code'  => '3032249', 

         'initiator_name'=>'ElshadaiAPI',
         
         'initiator_password'=>'Munene37@',
         
         
         'identifier_type' => MpesaConstants::MPESA_IDENTIFIER_TYPE_PAYBILL, 
         
         'queue_timeout_url' => 'https://deploy.elshadaigtinvestment.org/api/v1/response',
         'result_url'        => 'https://deploy.elshadaigtinvestment.org/api/v1/response',

      ]
);

$mpesa = new Mpesa($config);

// Perform B2C transaction

// return ($config);

try{

  $response = $mpesa->sendB2C($amount,$mobile,'BusinessPayment'); 

//   echo $response->ConversationID;
  // or
  $res= json_decode($response);
  
  $r=$res->ConversationID;
  
  return $r;

} catch(MpesaInternalException $e) {
  // This exception occurs when a configuration is missing e.g. consumer key
  echo $e->getMessage();

} catch(MpesaClientException $ce){
  // This occurs when the request has been sent to the mpesa servers but some invalid
  // data was supplied e.g. invalid consumer key
   
  echo $ce->getStatusCode(); // Returns http status code of the error
  echo $ce->getMessage(); // Returns the error message
  echo $ce->getErrorBody(); //  Returns the json string of the error body returned from server
  print_r($ce->getRequestParameters()); // An array of the request parameters sent i.e. the headers,
                                          // the request body, the URL hit, and method

} catch (MpesaServerException $se) {
  // This occurs when the request has been sent to the mpesa servers
  // but the server experienced some issues this is an error from the gateway and
  // is not the client fault

  echo $se->getStatusCode(); // Returns http status code of the error
  echo $se->getMessage(); // Returns the error message
  echo $se->getErrorBody(); //  Returns the json string of the error body returned from server
  print_r($se->getRequestParameters()); // An array of the request parameters sent i.e. the headers,
                                          // the request body, the URL hit, and method

}
        
            
              
              
        
            //   $access_token_url = 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
            //   $b2c_url = 'https://api.safaricom.co.ke/mpesa/b2c/v1/paymentrequest';
              
            //   $consumer_key = '0Ci4gw2qrNaMEAAzKIAAckLVSpDdTDNZ';
            //   $consumer_secret = 'ddvyhxx2mOAKWcwi';
            
            //   //$initiatorname="BONFACE GATHONDU";
            //   $initiatorpassword='Nashbill0703!';
            
            //   /* Required Variables */
            // //   $consumerKey = '0Ci4gw2qrNaMEAAzKIAAckLVSpDdTDNZ';       # Fill with your app Consumer Key
            // //   $consumerSecret = 'ddvyhxx2mOAKWcwi';     # Fill with your app Secret
            //     $headers = array(  
            //         'Content-Type: application/json; charset=utf-8'
            //       );
              
            //   /* from the test credentials provided on you developers account */
            //   $InitiatorName = 'NAHAMAN KAVYATI';
              
            //   $CommandID = 'BusinessPayment';
            //   $Amount = $amount;
            //   $PartyA = '3032249';             # shortcode 1
            //   $PartyB = $mobile;             # Phone number you're sending money to
            //   $Remarks = 'Salary';      # Remarks ** can not be empty
            //   $QueueTimeOutURL = 'https://deploy.elshadaigtinvestment.org/api/v1/response';    # your QueueTimeOutURL
            //   $ResultURL = 'https://deploy.elshadaigtinvestment.org/api/v1/response';          # your ResultURL
            //   $Occasion = 'payment';           # Occasion
            
            //   /* Obtain Access Token */
             
            
            // $headers=['Content-Type:application/json; charset-utf8'];
            //   $url_access_token = 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
            //   $curl = curl_init( $url_access_token);
            //   curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            //     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            //   curl_setopt($curl, CURLOPT_HEADER, false);
            //   curl_setopt($curl, CURLOPT_USERPWD, $consumer_key.':'.$consumer_secret);
            //  $result=curl_exec($curl);
            //  $status=curl_getinfo($curl, CURLINFO_HTTP_CODE);
            //  $result=json_decode($result);
            //  $access_token= $result->access_token;
            //   curl_close($curl);
              
             
            //  // curl_close($curl);
            //   $publicKey = "-----BEGIN CERTIFICATE-----MIIGkzCCBXugAwIBAgIKXfBp5gAAAD+hNjANBgkqhkiG9w0BAQsFADBbMRMwEQYKCZImiZPyLGQBGRYDbmV0MRkwFwYKCZImiZPyLGQBGRYJc2FmYXJpY29tMSkwJwYDVQQDEyBTYWZhcmljb20gSW50ZXJuYWwgSXNzdWluZyBDQSAwMjAeFw0xNzA0MjUx
            // NjA3MjRaFw0xODAzMjExMzIwMTNaMIGNMQswCQYDVQQGEwJLRTEQMA4GA1UECBMH
            // TmFpcm9iaTEQMA4GA1UEBxMHTmFpcm9iaTEaMBgGA1UEChMRU2FmYXJpY29tIExp
            // bWl0ZWQxEzARBgNVBAsTClRlY2hub2xvZ3kxKTAnBgNVBAMTIGFwaWdlZS5hcGlj
            // YWxsZXIuc2FmYXJpY29tLmNvLmtlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIB
            // CgKCAQEAoknIb5Tm1hxOVdFsOejAs6veAai32Zv442BLuOGkFKUeCUM2s0K8XEsU
            // t6BP25rQGNlTCTEqfdtRrym6bt5k0fTDscf0yMCoYzaxTh1mejg8rPO6bD8MJB0c
            // FWRUeLEyWjMeEPsYVSJFv7T58IdAn7/RhkrpBl1dT7SmIZfNVkIlD35+Cxgab+u7
            // +c7dHh6mWguEEoE3NbV7Xjl60zbD/Buvmu6i9EYz+27jNVPI6pRXHvp+ajIzTSsi
            // eD8Ztz1eoC9mphErasAGpMbR1sba9bM6hjw4tyTWnJDz7RdQQmnsW1NfFdYdK0qD
            // RKUX7SG6rQkBqVhndFve4SDFRq6wvQIDAQABo4IDJDCCAyAwHQYDVR0OBBYEFG2w
            // ycrgEBPFzPUZVjh8KoJ3EpuyMB8GA1UdIwQYMBaAFOsy1E9+YJo6mCBjug1evuh5
            // TtUkMIIBOwYDVR0fBIIBMjCCAS4wggEqoIIBJqCCASKGgdZsZGFwOi8vL0NOPVNh
            // ZmFyaWNvbSUyMEludGVybmFsJTIwSXNzdWluZyUyMENBJTIwMDIsQ049U1ZEVDNJ
            // U1NDQTAxLENOPUNEUCxDTj1QdWJsaWMlMjBLZXklMjBTZXJ2aWNlcyxDTj1TZXJ2
            // aWNlcyxDTj1Db25maWd1cmF0aW9uLERDPXNhZmFyaWNvbSxEQz1uZXQ/Y2VydGlm
            // aWNhdGVSZXZvY2F0aW9uTGlzdD9iYXNlP29iamVjdENsYXNzPWNSTERpc3RyaWJ1
            // dGlvblBvaW50hkdodHRwOi8vY3JsLnNhZmFyaWNvbS5jby5rZS9TYWZhcmljb20l
            // MjBJbnRlcm5hbCUyMElzc3VpbmclMjBDQSUyMDAyLmNybDCCAQkGCCsGAQUFBwEB
            // BIH8MIH5MIHJBggrBgEFBQcwAoaBvGxkYXA6Ly8vQ049U2FmYXJpY29tJTIwSW50
            // ZXJuYWwlMjBJc3N1aW5nJTIwQ0ElMjAwMixDTj1BSUEsQ049UHVibGljJTIwS2V5
            // JTIwU2VydmljZXMsQ049U2VydmljZXMsQ049Q29uZmlndXJhdGlvbixEQz1zYWZh
            // cmljb20sREM9bmV0P2NBQ2VydGlmaWNhdGU/YmFzZT9vYmplY3RDbGFzcz1jZXJ0aWZpY2F0aW9uQXV0aG9yaXR5MCsGCCsGAQUFBzABhh9odHRwOi8vY3JsLnNhZmFyaWNvbS5jby5rZS9vY3NwMAsGA1UdDwQEAwIFoDA9BgkrBgEEAYI3FQcEMDAuBiYrBgEEAYI3FQiHz4xWhMLEA4XphTaE3tENhqCICGeGwcdsg7m5awIBZAIBDDAdBgNVHSUEFjAUBggrBgEFBQcDAgYIKwYBBQUHAwEwJwYJKwYBBAGCNxUKBBowGDAKBggrBgEFBQcDAjAKBggrBgEFBQcDATANBgkqhkiG9w0BAQsFAAOCAQEAC/hWx7KTwSYrx2SOyyHNLTRmCnCJmqxA/Q+IzpW1mGtw4Sb/8jdsoWrDiYLxoKGkgkvmQmB2J3zUngzJIM2EeU921vbjLqX9sLWStZbNC2Udk5HEecdpe1AN/ltIoE09ntglUNINyCmfzChs2maF0Rd/y5hGnMM9bX9ub0sqrkzL3ihfmv4vkXNxYR8k246ZZ8tjQEVsKehEdqAmj8WYkYdWIHQlkKFP9ba0RJv7aBKb8/KP+qZ5hJip0I5Ey6JJ3wlEWRWUYUKhgYoPHrJ92ToadnFCCpOlLKWc0xVxANofy6fqreOVboPO0qTAYpoXakmgeRNLUiar0ah6M/q/KA==-----END CERTIFICATE-----";
            
            // // $publicKey=str_replace(' ', '+', $publicKey);
            // openssl_public_encrypt($initiatorpassword, $encrypted, $publicKey, OPENSSL_PKCS1_PADDING);
            
            //   /* Main B2C Request to the API */
             
            //   $SecurityCredential=base64_encode($encrypted);
            //   //echo $SecurityCredential;
            //   $b2cHeader = ['Content-Type:application/json','Authorization:Bearer '.$access_token];
            //   $curl = curl_init();
            //   curl_setopt($curl, CURLOPT_URL, $b2c_url);
            //   curl_setopt($curl, CURLOPT_HTTPHEADER, $b2cHeader); //setting custom header
            
            //   $curl_post_data = array(
            //     //Fill in the request parameters with valid values
            //     'InitiatorName' => $InitiatorName,
            //     'SecurityCredential' => $SecurityCredential,
            //     'CommandID' => $CommandID,
            //     'Amount' => $Amount,
            //     'PartyA' => $PartyA,
            //     'PartyB' => $PartyB,
            //     'Remarks' => $Remarks,
            //     'QueueTimeOutURL' => $QueueTimeOutURL,
            //     'ResultURL' => $ResultURL,
            //     'Occasion' => $Occasion
            //   );
            
            //   $data_string = json_encode($curl_post_data);
            //   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            //   curl_setopt($curl, CURLOPT_POST, true);
            //   curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
            //   $curl_response = curl_exec($curl);
            //   print_r($curl_response);
            //   //echo $curl_response;
              
            //   //we perform account update
            //   /* main request */
            //   $bal_url = 'https://api.safaricom.co.ke/mpesa/accountbalance/v1/query';
            
            //   $curl = curl_init();
            //   curl_setopt($curl, CURLOPT_URL, $bal_url);
            //   curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$access_token)); //setting custom header
            
            //   $curl_post_data = array(
            //     //Fill in the request parameters with valid values
            //     'Initiator'           =>$InitiatorName,                      # initiator name -> For test, use Initiator name(Shortcode 1)
            //     'SecurityCredential'  => $SecurityCredential,                      #Base64 encoded string of the Security Credential, which is encrypted using M-Pesa public key 
            //     'CommandID'           => 'AccountBalance',        # Command ID, Possible value AccountBalance             
            //     'PartyA'              => '3012059',                      # ShortCode 1, or your Paybill(During Production) 
            //     'IdentifierType'      => '4',                      
            //     'Remarks'             => 'Account balance',                      # Comments- Anything can go here
            //     'QueueTimeOutURL'     => 'https://ygmlimited.com/admin/payments/bal_callback_url.php',                      # URL where Timeout Response will be sent to
            //     'ResultURL'           => 'https://ygmlimited.com/admin/payments/bal_callback_url.php'                       # URL where Result Response will be sent to
            //   );
            
            //   $data_string = json_encode($curl_post_data);
            //   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            //   curl_setopt($curl, CURLOPT_POST, true);
            //   curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
            //   $curl_response = curl_exec($curl);
              
            //   return ($curl_response);
            //   //echo $curl_response;
              
             }
        
    
    public function postdatahaha(Request $request){
        
        
             $validated = Validator::make($request->all(), [
                'phone' => 'required|min:12',
                'amount' => 'required',
                'account'=>'required'
            ]);
        //get the mobile number 
        
        if($validated->fails()) {
                return Redirect::back()->withErrors($validated);
            }
        
        $phone = $request->phone;
        
        //get the amount
        
        $amount=$request->amount;
        
        
        //get the account numner
        
        $acc=$request->account;
        
                      $consumerKey = "zFot6QDbtlAUARqpmSg020dGxCJkW6xt"; //Fill with your app Consumer Key
                      $consumerSecret = "OhlOKSOeOEQwkEtU"; // Fill with your app Secret
                    
                      # define the variales
                      # provide the following details, this part is found on your test credentials on the developer account
                      $BusinessShortCode = "4089733";
                      $Passkey = "a04f4a4d008b09aecc68383f12149e8316deabcfe1ea60bf65512c83cfa0dd27";
                      
                      
                      
                      $PartyA = $phone; // This is your phone number, 
                      $AccountReference = $acc;
                      $TransactionDesc = $acc;
                      $Amount = $amount;
                     
                      # Get the timestamp, format YYYYmmddhms -> 20181004151020
                      $Timestamp = date('YmdHis');    
                      
                      # Get the base64 encoded string -> $password. The passkey is the M-PESA Public Key
                      $Password = base64_encode($BusinessShortCode.$Passkey.$Timestamp);
                    
                      # header for access token
                      $headers = ['Content-Type:application/json; charset=utf8'];
                    
                        # M-PESA endpoint urls
                      $access_token_url = 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
                      $initiate_url = 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
                    
                      # callback url
                      $CallBackURL = "https://deploy.elshadaigtinvestment.org/api/v1/response";  
                    
                      $curl = curl_init($access_token_url);
                      curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                      curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
                      curl_setopt($curl, CURLOPT_HEADER, FALSE);
                      curl_setopt($curl, CURLOPT_USERPWD, $consumerKey.':'.$consumerSecret);
                      $result = curl_exec($curl);
                      $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
                      $result = json_decode($result);
                      $access_token = $result->access_token;  
                      curl_close($curl);
                    
                      # header for stk push
                      $stkheader = ['Content-Type:application/json','Authorization:Bearer '.$access_token];
                    
                      # initiating the transaction
                      $curl = curl_init();
                      curl_setopt($curl, CURLOPT_URL, $initiate_url);
                      curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader); //setting custom header
                    
                      $curl_post_data = array(
                        //Fill in the request parameters with valid values
                        'BusinessShortCode' => $BusinessShortCode,
                        'Password' => $Password,
                        'Timestamp' => $Timestamp,
                        'TransactionType' => 'CustomerPayBillOnline',
                        'Amount' => $Amount,
                        'PartyA' => $PartyA,
                        'PartyB' => $BusinessShortCode,
                        'InvoiceNumber'=>'elshadai',
                        'PhoneNumber' => $PartyA,
                        'CallBackURL' => $CallBackURL,
                        'AccountReference' => $AccountReference,
                        'TransactionDesc' => $TransactionDesc
                      );
                    
                      $data_string = json_encode($curl_post_data);
                      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                      curl_setopt($curl, CURLOPT_POST, true);
                      curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
                      $curl_response = curl_exec($curl);
                    //   print_r($curl_response);
                    
                    //   echo $curl_response;
                    $response=json_decode($curl_response);
                    if(($response->ResponseDescription)=="Success. Request accepted for processing"){
                        $message="Success. Request accepted for processing.";
                        return back()->with("Success",$message);
                    }else{
                        $message="IF you did not receive stk push, Complete payment with paybill number 4089733 and account number as $AccountReference";
                        return back()->with("error",$message);
                    }
                    
                    

                    // return response()->json($response->ResponseDescription,200);
        
    }
    public function cron(){

        $today = new Carbon();
        if(!(($today->dayOfWeek == Carbon::SATURDAY) || ($today->dayOfWeek == Carbon::SUNDAY))){

            //get all active investments
            $investments=Investments::where('status',1)
            ->whereDate('updated_at','!=',Carbon::now()->format('Y:m:d'))
            ->get();
          
          // return $investments;

            foreach ($investments as $investment) {

                if(($investment->running_days!=50)){
                     $dispatcher=new Investment($investment->id,$investment->daily,$investment->earnings,$investment->status,$investment->running_days,$investment->running_time,$investment->end_date,$investment->created_at);

                    dispatch($dispatcher); 
                }else{

                    // $update=Investments::where('id',$investment->id)->update(['status'=>2]);

                }

                 
            }

         
           
            

        }else{
         $date = new Carbon('last thursday');
        }

    }

    public function requesting(Request $request){



    $logFile = "M_PESAConfirmationResponse.txt";
    
    $log = fopen($logFile, "a");
    
    fwrite($log, $request);
    
    fclose($log);
    
   
    $TransactionType     =  $request['TransactionType'];
    $TransID          =$request['TransID'];
    $TransTime           = $request['TransTime'];
    $TransAmount          = $request['TransAmount'];
    $BillRefNumber       = $request['BillRefNumber'];
    $InvoiceNumber       = $request['InvoiceNumber'];
    $ThirdPartyTransID   = $request['ThirdPartyTransID'];
    $MSISDN            = $request['MSISDN'];
    $FirstName          = $request['FirstName'];
    $MiddleName         = $request['MiddleName'];
    $LastName            = $request['LastName'];
    
    //get the accouunt id 

    $account=explode("#", $BillRefNumber);
    
    $p=new mobilepayments();
    
    $p->TransactionType=$TransactionType;
    $p->TransID=$TransID;
    $p->TransTime=$TransTime;
    $p->TransAmount=$TransAmount;
    $p->BusinessShortCode=$request['BusinessShortCode'];
    $p->BillRefNumber=$BillRefNumber;
    $p->InvoiceNumber=$InvoiceNumber;
    $p->OrgAccountBalance=$request['OrgAccountBalance'];
    $p->ThirdPartyTransID=$ThirdPartyTransID;
    $p->MSISDN=$MSISDN;
    $p->FirstName=$FirstName;
    $p->MiddleName=$MiddleName;
    $p->LastName=$LastName;
    
    if($TransID !=NULL){
        $p->save();
    }
    
    
    
    $account_id=$account[1];
    $type=$account[0];
    
    // return $type;
    
    if($type=="act"){
        //insert this data in activations table




    //check if the ID is available in the database
    $checker=User::where('id',$account_id)
    ->where('status',1)
    ->first();

    $activation_fee=env('Activation_amount');
    
    $au=env('actu');

    //if count is greater than 1 then the record is available

    if(($checker) && (($TransAmount>=$activation_fee) ||($TransAmount>=$au)) && ($TransactionType=="Pay Bill")){

        //add this record to the activations record

        $activations= new Activations();

        $activations->user_id=$account_id;

        $activations->amount=$TransAmount;

        $checker->update(['status'=>2]);
        
        $checker->email;
        
        $s=$checker->username;
        
        $message="Congratulations 🎉, Your account is now Active. Keep it https://elshadaigtinvestment.org";
            
        
            
        $subject="🎉🎉Activation successfull🎉🎉";
        
        
        Mail::to($checker->email)->send(new Activation($s,$message,$subject));
        
        

        if($activations->save() && $checker){

            //check if the user has an affiliate and award the affiliate

            //add the earning on the earnings table for the referal

            $c=User::where('username',$checker->referal)->first();

            $expenditure= new Expenditure();

            $expenditure->user_id=$account_id;

            $expenditure->amount=$TransAmount;

            $expenditure->Purpose="Account activation";

            $expenditure->save();

            // $ref=$c->ref_bal;

            
            
            if($c->currency=='KES'){
                $level_one=env('level_one');
                $ref1=$c->ref_bal+$level_one;
            }else{
                $level_one=env('level_oneu');
                $ref1=$c->ref_bal+$level_one;
            }

            
            
            

            $wallet1=$c->wallet+env('level_one');
            
            // return $wallet1;
            

            $c->update(['ref_bal'=>$ref1]);
            
            //send email for level earnings
            $c->email;
            
            $message="Congratulations 🎉, You earned Level one commision of $level_one from refering $checker->username. Keep it https://elshadaigtinvestment.org";
            
            $username=$c->username;
            
            $subject="🎉🎉Level one commision🎉🎉";
            
            Mail::to($c->email)->send(new Referals($username,$message,$subject));
            
             
            
            

            $earnings=new Earnings();

            $earnings->user_id=$c->id;

            $earnings->type="Level one Earnings";

            $earnings->amount=$level_one;

            $earnings->from_user=$checker->id;


            $earnings->save();


            //check and earn level two 


            $level_referer=$c->referal;

            $second=User::where('username',$level_referer)->first();


            $second_balance=$second->ref_bal;

            

            $wallet2=$second->wallet+env('level_two');
            
             if($second->currency=='KES'){
                $second_balance=$second_balance+env('level_two');
            }else{
                $second_balance=$second_balance+env('level_twou');
            }

            $second->update(['ref_bal'=>$second_balance]);
            
            $second->email;
            
            $l2=env('level_two');
            
            $message="Congratulations 🎉, You just earned Level two commision of KES $l2 . Keep it https://elshadaigtinvestment.org";
            
            $username=$second->username;
            
            $subject="🎉🎉Level two Commision 🎉🎉";
            
            Mail::to($second->email)->send(new Referals($username,$message,$subject));


            $earnings->user_id=$second->id;

            $earnings->type="Level two Earnings";

            $earnings->amount=env('level_two');

            $earnings->from_user=$account_id;


            $earnings->save();


            //check for Level three earnings


            $level_referer=$second->referal;

            $third=User::where('username',$level_referer)->first();

            $third_balance=$third->ref_bal;

            
            
            
            if($third->currency=='KES'){
                $third_balance=$third_balance+env('level_three');
            }else{
                $third_balance=$third_balance+env('level_threeu');
            }

            $wallet3=$third->wallet+env('level_two');

            $third->update(['ref_bal'=>$third_balance]);
            
            $l3=env('level_three');
            
            $third->email;
            
            $message="Congratulations 🎉, You just earned Level three commision of KES $l3. Keep it https://elshadaigtinvestment.org";
            
            $username=$third->username;
            
            $subject="🎉🎉Level three Commision 🎉🎉";
            
            Mail::to($third->email)->send(new Referals($username,$message,$subject));


            $earnings->user_id=$third->id;

            $earnings->type="Level three Earnings";

            $earnings->amount=env('level_three');

            $earnings->from_user=$account_id;


            $earnings->save();

            //check for Level four earnings

            // $level_referer=$third->referal;

            // $fourth=User::where('username',$level_referer)->first();

            // $fourth_balance=$fourth->ref_bal;

            // $fourth_balance=$fourth_balance+env('level_four');

            // $wallet=$fourth->wallet+env('level_two');

            // $c->update(['ref_bal'=>$fourth_balance,'wallet'=>$wallet]);

            // $earnings->user_id=$fourth->id;

            // $earnings->type="Level four Earnings";

            // $earnings->amount=env('level_four');

            // $earnings->from_user=$account_id;


            // $earnings->save();








            return response()->json("Records added",201);

        }else{
            return response()->json("An errro occred",500);
        }




    }elseif(($checker) && ($TransAmount>=$au) && ($TransactionType=="paypal")){
        $activations= new Activations();

        $activations->user_id=$account_id;

        $activations->amount=$TransAmount;

        $checker->update(['status'=>2]);
        
        $checker->email;
        
        $s=$checker->username;
        
        $message="Congratulations 🎉, Your account is now Active. Keep it https://elshadaigtinvestment.org";
            
        
            
        $subject="🎉🎉Activation successfull🎉🎉";
        
        
        Mail::to($checker->email)->send(new Activation($s,$message,$subject));
        
        

        if($activations->save() && $checker){

            //check if the user has an affiliate and award the affiliate

            //add the earning on the earnings table for the referal

            $c=User::where('username',$checker->referal)->first();

            $expenditure= new Expenditure();

            $expenditure->user_id=$account_id;

            $expenditure->amount=$TransAmount;

            $expenditure->Purpose="Account activation";

            $expenditure->save();

            // $ref=$c->ref_bal;

            $level_one=env('level_oneu');

            $ref1=$c->ref_bal+$level_one;
            
            

            $wallet1=$c->wallet+env('level_oneu');
            
            // return $wallet1;
            

            $c->update(['ref_bal'=>$ref1]);
            
            //send email for level earnings
            $c->email;
            
            $message="Congratulations 🎉, You earned Level one commision of $level_one from refering $checker->username. Keep it https://elshadaigtinvestment.org";
            
            $username=$c->username;
            
            $subject="🎉🎉Level one commision🎉🎉";
            
            Mail::to($c->email)->send(new Referals($username,$message,$subject));
            
             
            
            

            $earnings=new Earnings();

            $earnings->user_id=$c->id;

            $earnings->type="Level one Earnings";

            $earnings->amount=$level_one;

            $earnings->from_user=$checker->id;


            $earnings->save();


            //check and earn level two 


            $level_referer=$c->referal;

            $second=User::where('username',$level_referer)->first();


            $second_balance=$second->ref_bal;

            $second_balance=$second_balance+env('level_twou');

            $wallet2=$second->wallet+env('level_twou');

            $second->update(['ref_bal'=>$second_balance]);
            
            $second->email;
            
            $l2=env('level_twou');
            
            $message="Congratulations 🎉, You just earned Level two commision of KES $l2 . Keep it https://elshadaigtinvestment.org";
            
            $username=$second->username;
            
            $subject="🎉🎉Level two Commision 🎉🎉";
            
            Mail::to($second->email)->send(new Referals($username,$message,$subject));


            $earnings->user_id=$second->id;

            $earnings->type="Level two Earnings";

            $earnings->amount=env('level_twou');

            $earnings->from_user=$account_id;


            $earnings->save();


            //check for Level three earnings


            $level_referer=$second->referal;

            $third=User::where('username',$level_referer)->first();

            $third_balance=$third->ref_bal;

            $third_balance=$third_balance+env('level_threeu');

            $wallet3=$third->wallet+env('level_twou');

            $third->update(['ref_bal'=>$third_balance]);
            
            $l3=env('level_threeu');
            
            $third->email;
            
            $message="Congratulations 🎉, You just earned Level three commision of KES $l3. Keep it https://elshadaigtinvestment.org";
            
            $username=$third->username;
            
            $subject="🎉🎉Level three Commision 🎉🎉";
            
            Mail::to($third->email)->send(new Referals($username,$message,$subject));


            $earnings->user_id=$third->id;

            $earnings->type="Level three Earnings";

            $earnings->amount=env('level_threeu');

            $earnings->from_user=$account_id;


            $earnings->save();

            








            return response()->json("Records added",201);

        }else{
            return response()->json("An errro occred",500);
        }



    }
    
    
    else{

        return response()->json("Record not found",200);
    }



    
    return response()->json($account_id,200);
    }
    else{
        //this is a deposit request
        //get the users balance and add this to his wallet
        $user=User::where('id',$account_id)->first();
        
        $wallet=$user->wallet;
        
        $balance=$wallet+$TransAmount;
        
        // return $balance;
        
        $userp=User::where('id',$account_id)->update(['wallet'=>$balance]);
        //add to deposits
    }
    
    
}
    
}
