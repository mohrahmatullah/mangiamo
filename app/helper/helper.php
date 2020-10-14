<?php 

use Illuminate\Support\Facades\DB;

function AllPage() {
  $data['og_title']       = DB::table('settings')->where(['key' => 'site.title', 'group' => 'site'])->first()->value;
  $data['og_description'] = DB::table('settings')->where(['key' => 'site.description', 'group' => 'site'])->first()->value;
  $data['og_keyword']     = 'decoration, florist, floral, party, event';
  $data['og_author']      = 'Paulus Ganesha Aryo Prakoso';
    
  return $data;
}