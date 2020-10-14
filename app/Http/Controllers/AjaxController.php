<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
	public function getMenusByCategories(Request $request){
		$input = Request::all();
		$category_id = $input['category_id'];
		$menus = DB::table('tbl_menus')
			->select('tbl_menus.*')
			->join('tbl_menu_categories', 'tbl_menu_categories.id', 'tbl_menus.category_id')
			->where('tbl_menu_categories.id', $category_id)
			->where('tbl_menus.status', 'published')
			->orderBy('tbl_menus.updated_at', 'DESC')
			->get();

		return view('dekstop.menu.menu_additional_content', compact('menus'));
	}

	public function getMenusByCategoriesMobile(Request $request){
		$input = Request::all();
		$category_id = $input['category_id'];
		$menus = DB::table('tbl_menus')
			->select('tbl_menus.*')
			->join('tbl_menu_categories', 'tbl_menu_categories.id', 'tbl_menus.category_id')
			->where('tbl_menu_categories.id', $category_id)
			->where('tbl_menus.status', 'published')
			->orderBy('tbl_menus.updated_at', 'DESC')
			->get();

		return view('mobile.menu.menu_additional_content', compact('menus'));
	}
}
