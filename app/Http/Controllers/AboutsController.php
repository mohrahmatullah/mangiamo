<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\DB;

class AboutsController extends Controller
{
    public function index(){
		$agent = new Agent();
		if($agent->isMobile()){
			$data 					       = AllPage();
			$data['about_first'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','first')
				->first();

			$data['about_second1'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','second1')
				->first();

			$data['about_second2'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','second2')
				->first();

			$data['about_second3'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','second3')
				->first();

			$data['about_second4'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','second4')
				->first();

			$data['about_third'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','third')
				->first();

			$data['about_fourth1'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','fourth1')
				->first();

			$data['about_fourth2'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','fourth2')
				->first();

			$data['about_fourth3'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','fourth3')
				->first();

			$data['about_fifth'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','fifth')
				->first();

			$data['about_sixth'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','sixth')
				->first();

			$data['about_seventh'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','seventh')
				->first();				

			return view('mobile.abouts.index', $data);

		}else{
			$data 					       = AllPage();
			$data['about_first'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','first')
				->first();

			$data['about_second1'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','second1')
				->first();

			$data['about_second2'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','second2')
				->first();

			$data['about_second3'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','second3')
				->first();

			$data['about_second4'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','second4')
				->first();

			$data['about_third'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','third')
				->first();

			$data['about_fourth1'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','fourth1')
				->first();

			$data['about_fourth2'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','fourth2')
				->first();

			$data['about_fourth3'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','fourth3')
				->first();

			$data['about_fifth'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','fifth')
				->first();

			$data['about_sixth'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','sixth')
				->first();

			$data['about_seventh'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','seventh')
				->first();	
				
			return view('dekstop.abouts.index', $data);
		}
	} 
}
