<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\dbtest;

class DBcontroller extends Controller
{
  public function projectChartData()
  {
      $dbtest = json_encode(DB::table('tbtests')
          ->select(DB::raw('name(created_at) as month'), DB::raw("DATE_FORMAT(created_at,'%Y-%m') as monthNum"),
              DB::raw('count(*) as projects'))
          ->groupBy('name')
          ->get());

      return view('tbtests.chart',compact('dbtest'));
  }
}
