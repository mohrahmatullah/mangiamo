<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\DB;
use App\TblPromo;

class PromoController extends Controller
{
    public function index(Request $req){
		$agent = new Agent();
		if($agent->isMobile()){
			$data 					       = AllPage();
			$data['promo'] = DB::table('tbl_promos')
				->where('tbl_promos.status','published')
            	->orderby('tbl_promos.created_at', 'desc')
            	->get();
			return view('mobile.promo.index', $data);
		}else{
			$data 					       = AllPage();
			$data['promo'] = DB::table('tbl_promos')
				->where('tbl_promos.status','published')
            	->orderby('tbl_promos.created_at', 'desc')
            	->paginate(2);

            if ($req->ajax()) {
	          return view('dekstop.promo.loadnews', $data);
	        }

			return view('dekstop.promo.index', $data);
		}
	}

	public function detail($slug){
		$agent = new Agent();
		if($agent->isMobile()){
			$data 					       = AllPage();
			$data['promo_detail'] = DB::table('tbl_promos')
				->where('tbl_promos.slug',$slug)
            	->where('tbl_promos.status','published')
            	->first();
			return view('mobile.promo.detail', $data);
		}else{
			$data 					       = AllPage();
			$data['promo_detail'] = DB::table('tbl_promos')
				->where('tbl_promos.slug',$slug)
            	->where('tbl_promos.status','published')
            	->first();

            // dd($data['promo_detail']);

			return view('dekstop.promo.detail', $data);
		}
	}
}
