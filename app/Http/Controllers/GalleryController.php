<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index(){
		$agent = new Agent();
		if($agent->isMobile()){
			$data 					       = AllPage();
			$data['gallery'] = DB::table('tbl_galleries')
				->where('tbl_galleries.status','published')
				->get();
			return view('mobile.gallery.index', $data);
		}else{
			$data 					       = AllPage();
			$data['gallery'] = DB::table('tbl_galleries')
				->where('tbl_galleries.status','published')
				->get();

				// dd($data['gallery']);
			return view('dekstop.gallery.index', $data);
		}
	}
}
