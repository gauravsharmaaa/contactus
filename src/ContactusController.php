<?php
namespace Sharmag\Contactus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sharmag\Contactus\Contactus as Contact;
use DB;


class ContactusController extends Controller{ 
 
	public function index()
	{
		return view('contactus::index');
	}

	public function postForm(Request $request) 
	{

		// dd($request->all());
		$create=Contact::create($request->all());
		//dd($create); 
		if($create){
			return redirect()->back()->with('success','Request sent!');
		}
		return redirect()->back()->with('error','Request coudnt sent!'); 
	}
}