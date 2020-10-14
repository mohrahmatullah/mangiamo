<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\DB;
use App\TblMessage;
use App\TblContactContent;
use App\TblContactMessage;

class MessageController extends Controller
{
    public function index(){
		$agent = new Agent();
		if($agent->isMobile()){
			$data 					       = AllPage();
			return view('mobile.contact.index', $data);
		}else{
			$data 					       = AllPage();
			$data['contact_us'] = DB::table('tbl_contact_contents')
				->where('tbl_contact_contents.section','1')
				->first();

			$data['working_hours'] = DB::table('tbl_contact_contents')
				->where('tbl_contact_contents.section','2')
				->first();

			$data['get_in_touch'] = DB::table('tbl_contact_contents')
				->where('tbl_contact_contents.section','3')
				->first();

			return view('dekstop.contact.index', $data);
		}
	}

	public function saveMessage(){
		$input = Request::all();
	      if ((isset($input['name']) && $input['phone'] && $input['email'] && $input['message'])) {
	            $termObj             =    new TblMessage;
	            $termObj->name       =   $input['name'];
	            $termObj->phone      =   $input['phone'];
	            $termObj->emails      =   $input['email'];
	            $termObj->body       =   $input['message'];
	            $termObj->ip_address =   \Request::ip();
	            
	          if( $termObj->save() ){
	              return response()->json(array('success' => TRUE));
	          }  
	      }
	      else{
	        return response()->json(array('error_no_entered' => FALSE));
	      }
	}
}
