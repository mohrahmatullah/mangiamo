<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\DB;
use App\TblNews;

class NewsController extends Controller
{
    public function index(Request $req){
		$agent = new Agent();
		if($agent->isMobile()){
			$data 					       = AllPage();
			$data['blog'] = DB::table('tbl_news')
				->where('tbl_news.status','published')
            	->orderby('tbl_news.created_at', 'desc')
            	->get();
			return view('mobile.blog.index', $data);
		}else{
			$data 					       = AllPage();
			// $data['blog'] 		= TblNews::where('status', 'published')->orderby('created_at', 'desc')->paginate(3);
			$data['blog'] = DB::table('tbl_news')
				->where('tbl_news.status','published')
            	->orderby('tbl_news.created_at', 'desc')
            	->paginate(2);
            	
            if ($req->ajax()) {
	          return view('dekstop.news.loadnews', $data);
	        }

            	// dd($data['slider_menu']);
			return view('dekstop.news.index', $data);
		}
	}

	public function detail($slug){
		$agent = new Agent();
		if($agent->isMobile()){
			$data 					       = AllPage();
			$data['blog_detail'] = DB::table('tbl_news')
				->where('tbl_news.slug',$slug)
            	->where('tbl_news.status','published')
				->first();
				$data['blog_detail'] = DB::table('tbl_news')
				->where('tbl_news.slug',$slug)
            	->where('tbl_news.status','published')
            	->first();

            	$slider = $data['blog_detail']->gallery;
            	$slider = str_replace('"', '', $slider);
            	$slider = str_replace('[', '', $slider);
            	$slider = str_replace(']', '', $slider);
            	$slider = explode(',', $slider);
            	$data['slider_menu'] = $slider;
			return view('mobile.blog.detail', $data);
		}else{
			$data 					       = AllPage();
			$data['blog_detail'] = DB::table('tbl_news')
				->where('tbl_news.slug',$slug)
            	->where('tbl_news.status','published')
            	->first();

            	$slider = $data['blog_detail']->gallery;
            	$slider = str_replace('"', '', $slider);
            	$slider = str_replace('[', '', $slider);
            	$slider = str_replace(']', '', $slider);
            	$slider = explode(',', $slider);
            	$data['slider_menu'] = $slider;

            	// dd($data['slider_menu']);
			return view('dekstop.news.detail', $data);
		}
	}
}
