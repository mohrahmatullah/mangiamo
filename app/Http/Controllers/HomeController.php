<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
	public function index(){
		$agent = new Agent();
		if($agent->isMobile()){
			$data = AllPage();
			$data['menu_homepage'] = DB::table('tbl_menu_categories')
				->take(4)
				->get();

			$data['about_homepage'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','first')
				->first();

			$data['buffet_homepage'] = DB::table('tbl_menus')
				->where('tbl_menus.category_id','1')
				->get();

			$data['testimonial_homepage'] = DB::table('tbl_testimonials')
				->where('tbl_testimonials.status','published')
            	->orderby('tbl_testimonials.id', 'asc')
            	->get();

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

			$data['chef'] = DB::table('tbl_chefs')
				->where('tbl_chefs.status','published')
				->first();

			return view('mobile.home.index',$data);
		}else{
			$data 					       = AllPage();

			$data['menu_homepage'] = DB::table('tbl_menu_categories')
				->take(5)
				->get();

			$data['about_homepage'] = DB::table('tbl_abouts')
				->where('tbl_abouts.section','first')
				->first();

			$data['buffet_homepage'] = DB::table('tbl_menus')
				->where('tbl_menus.category_id','1')
				->get();

			$data['testimonial_homepage'] = DB::table('tbl_testimonials')
				->where('tbl_testimonials.status','published')
            	->orderby('tbl_testimonials.id', 'asc')
            	->get();

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

			$data['chef'] = DB::table('tbl_chefs')
				->where('tbl_chefs.status','published')
				->first();


			return view('dekstop.home.index', $data);
		}
		/*$arr = array(['mobile' => $agent->isMobile()] , ['tablet' => $agent->isTablet()], ['windows' => $agent->is('Windows')], ['firefox' => $agent->is('Firefox')], ['iphone' => $agent->is('iPhone')] , ['OSx' => $agent->is('OS X')], ['isAndroidOS' => $agent->isAndroidOS()], ['nexus' => $agent->isNexus()], ['safari' => $agent->isSafari()]);
    	dd($arr);*/
	}    
}
