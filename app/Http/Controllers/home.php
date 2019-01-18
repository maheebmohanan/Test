<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Cookie;

use Tracker;

use Session;

use View;

use Mail;

class home extends Controller 
{

public function logout()
{
Session::flush();
return redirect('/')->with('msg', 'Redirect successfull');
}


public function index()
{

return View::make('welcome');


}


public function login(Request $request)
{

	
if($request->input('submit')) 
{	
$username      = 		$request->input('username');
$password      =		$request->input('password');

$userdetails = DB::table("users")
->where('email', $username)
->where('password', $password)
->first();


//echo "<pre>getcustomerDetials:" ;print_r($getcustomerDetials); echo "</pre>"; exit; 

if(!empty($userdetails))
{

//Session::put('username', $userdetails->name);

Session::put('user_id', $userdetails->id);

return redirect('/dashboard'); 


}

else 
{       

return redirect('/home/login')->with('message', 'Incorrect login.');
}
}
	$pagename="Welcome Dashboard "; 
      
return View::make('login', compact('pagename'));
}

public function dashboard()

{
  $pagename="Welcome Dashboard ";
	$leadlist = DB::table('registartion')->get();
      
return View::make('dashboard', compact('pagename','leadlist'));

}
	
	
	
	
	public function registartion(Request $request)
	{    
  if($request->input('submit')) 
    {
      $data=array(
        'name'      	 => $request->input('name'),
		'email'          => $request->input('email'),  
        'phone'          => $request->input('phone'),
        'address'        => $request->input('address'),
        'location'       => $request->input('location'),
        'sqft'       => $request->input('sqft'),
       
		
       );
     
    
   
       
      
      $lastInsertedID = DB::table('registartion')->insertGetId($data);
     
     Session::flash('messages', "Inserted successfully"); 
     return redirect()->back();
    
          }
    return View::make('registration');  
 }
	

}

