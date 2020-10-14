<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;

class MenuController extends Controller
{
	public function index(Request $request, $slug){
		$agent = new Agent();
		if($agent->isMobile()){
			$data = AllPage();
			
			$data['menu_category'] = DB::table('tbl_menu_categories')->get();
			if(!empty($data['menu_category'])){
				foreach($data['menu_category'] as $mc){
					/* Blogs data */
					$data['menu'] = DB::table('tbl_menus')
					->where('tbl_menus.status', 'published')
					->get();
				}
				$data['menu_every_slug'] = DB::table('tbl_menus')
					->select('tbl_menus.title', 'tbl_menus.slug', 'tbl_menus.images', 'tbl_menu_categories.name')
					->where('tbl_menus.status', 'published')
					->leftjoin('tbl_menu_categories','tbl_menu_categories.id','tbl_menus.category_id')					
					->where('tbl_menu_categories.slug', $slug)
					->get();

			}

			return view('mobile.menu.index', $data);
		}else{
			$data 					       = AllPage();

			$data['menu_category'] = DB::table('tbl_menu_categories')->get();
			if(!empty($data['menu_category'])){
				foreach($data['menu_category'] as $mc){
					/* Blogs data */
					$data['menu'] = DB::table('tbl_menus')
					->where('tbl_menus.status', 'published')
					->get();
				}
			}

			// $input = Request::all();
			// $category_id = $input['category_id'];
			// $data['menu'] = DB::table('tbl_menus')			
			// ->where('tbl_menus_category.id', $category_id)			
			// ->get();

			$data['menu_every_slug'] = DB::table('tbl_menus')
					->select('tbl_menus.title', 'tbl_menus.slug', 'tbl_menus.images', 'tbl_menu_categories.name')
					->where('tbl_menus.status', 'published')
					->leftjoin('tbl_menu_categories','tbl_menu_categories.id','tbl_menus.category_id')					
					->where('tbl_menu_categories.slug', $slug)
					->get();

			return view('dekstop.menu.index', $data);
		}
	} 

	public function detail( $slug )   {
		$agent = new Agent();
		if($agent->isMobile()){
			$data = AllPage();
			$data['menu_every_slug'] = DB::table('tbl_menus')
					->where('tbl_menus.status', 'published')					
					->where('tbl_menus.slug', $slug)
					->leftjoin('tbl_menu_categories','tbl_menu_categories.id','tbl_menus.category_id')
					->select('tbl_menus.title', 'tbl_menus.description','tbl_menus.images','tbl_menus.gallery','tbl_menu_categories.name')
					->first();
			$slider = $data['menu_every_slug']->gallery;
	        $slider = str_replace('"', '', $slider);
	        $slider = str_replace('[', '', $slider);
	        $slider = str_replace(']', '', $slider);
	        $slider = explode(',', $slider);
	        $data['mainslider'] = $slider;
			return view('mobile.menu.detail', $data);
		}else{
			$data 					       = AllPage();
			$data['menu_every_slug'] = DB::table('tbl_menus')
					->where('tbl_menus.status', 'published')					
					->where('tbl_menus.slug', $slug)
					->leftjoin('tbl_menu_categories','tbl_menu_categories.id','tbl_menus.category_id')
					->select('tbl_menus.title', 'tbl_menus.description','tbl_menus.images','tbl_menus.gallery','tbl_menu_categories.name')
					->first();
			$slider = $data['menu_every_slug']->gallery;
	        $slider = str_replace('"', '', $slider);
	        $slider = str_replace('[', '', $slider);
	        $slider = str_replace(']', '', $slider);
	        $slider = explode(',', $slider);
	        $data['mainslider'] = $slider;
	        // $arr = get_defined_vars();
	        // dd($data['mainslider']);
			return view('dekstop.menu.menu-detail', $data);
		}
	}
}
