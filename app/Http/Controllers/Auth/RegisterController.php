<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

use App\activities;
use Session;

use App\site_settings;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/activate';
    
    private $token;
    private $email;
    private $usr;
    private $st;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->st = site_settings::find(1);
        $this->middleware('guest');
    }


 
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Fname' => ['required', 'string', 'max:255'],
            'Lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'unique:users','min:12', 'max:12'],
            'username' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {        
        $this->token = mt_rand(0000, 9999).strtotime(date("Y-m-d H:i:s"));
        //Session::forget('ref');
        $this->email = $data['email'];
        $this->usr = $data['username'];
        
        if($data['country']=='KENYA'){
             return User::create([
            'firstname' => trim($data['Fname']),
            'lastname' => trim($data['Lname']),
            'phone' => trim($data['phone']),
            'email' => trim($data['email']),
            'username' => trim($data['username']),
            'name' => trim($data['username']),
            'country' => trim($data['country']),
            'password' => Hash::make($data['password']),
            'act_code' => $this->token,
            'status' => 1,
            'currency'=>"KES",
            'referal' => trim($data['ref']),
            'reg_date' => date('d-m-Y'),      
        ]);
        }else{
             return User::create([
            'firstname' => trim($data['Fname']),
            'lastname' => trim($data['Lname']),
            'phone' => trim($data['phone']),
            'email' => trim($data['email']),
            'username' => trim($data['username']),
            'name' => trim($data['username']),
            'country' => trim($data['country']),
            'password' => Hash::make($data['password']),
            'act_code' => $this->token,
            'status' => 1,
            'currency'=>"USD",
            'referal' => trim($data['ref']),
            'reg_date' => date('d-m-Y'),      
        ]);
        }
        
      
        
       
       
        
        
    }

    public function redirectTo()
    {
        
        try
        {
            // Session::flush();
            Session::put('regMsg', 'Registration Successful Please activate your account'); 
            
            $maildata = ['email' => $this->email, 'usr' => $this->usr, 'token' => $this->token];
            // Mail::send('mail.regconfirm', ['md' => $maildata], function($msg) use ($maildata){
            //     $msg->from(env('MAIL_USERNAME'), $this->st->site_title);
            //     $msg->to($maildata['email']);
            //     $msg->subject('User Account Activation');
            // }); 
            return '/login';
        }
        catch(\Exception $e)
        {
            Session::flush();
            Session::put('regMsg', $e->getMessage().'Registration successful! We are having problem sending mail. Please contact support for activation'); 
            return '/activate';
        }
        
    }
}
