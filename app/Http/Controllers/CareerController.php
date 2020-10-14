<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;
use App\TblCareer;
use App\TblCareerMessage;
use Illuminate\Support\Facades\Storage;
use Mail;

class CareerController extends Controller
{
    public function index(){
		$agent = new Agent();
		if($agent->isMobile()){
			$data 					       = AllPage();
			$data['career'] = DB::table('tbl_careers')
				->where('tbl_careers.status','published')
				->get();
			return view('mobile.career.index', $data);
		}else{
			$data 					       = AllPage();
			$data['career'] = DB::table('tbl_careers')
				->where('tbl_careers.status','published')
				->get();
			return view('dekstop.career.index', $data);
		}
	}

	public function saveCareerMsg(Request $request){
			$this->validate(request(), [
				'name' => 'required',
				'jobdesc' => 'required',
				'phone' => 'required',
	            'email' => 'required'
	         ]); 

	        $termObj            =    new TblCareerMessage;
	            $termObj->name      =   $request->input('name');
	            $termObj->jobdesc   =   $request->input('jobdesc');
	            $termObj->phone     =   $request->input('phone');
	            $termObj->email     =   $request->input('email');

			    $file = $request->file('filename');
	            $path = Storage::disk('public')->put('tbl-career-messages/'.date('FY'), $file);
	            $termObj->file = $path;

	            $termObj->save();

	            /*Send email message carier*/
	              try{
	                    Mail::send('dekstop.career.applyer',
	                    	array(
					           'name' => $request->get('name'),
					           'jobdesc' => $request->get('jobdesc'),
							   'phone' => $request->get('phone'),
					           'email' => $request->get('email'),
					           'file' => env('URL_MEDIA').'/'.$path
					       ), function ($msg) use ($request)
	                {	                						      
					      $msg->subject("CAREER".' | '.$request->get('jobdesc').' - '.$request->get('name'));
   	                	  $msg->from('mangiamo.buffet@gmail.com');
   	                	  $msg->to('rahmetuloh@gmail.com', 'Admin');
					      // $msg->to('mangiamo.buffet@gmail.com', 'Admin');
					      // $msg->attach($path);
	                });
	                    // Session::flash('success-message', "Terima kasih, kami sudah menerima email anda.");
	                    return redirect()->back();
	                }
	                catch (Exception $e){
	                    return redirect()->back();
	                }
	              /* \Send email message carier*/

	    	return redirect()->back();
	}

}
