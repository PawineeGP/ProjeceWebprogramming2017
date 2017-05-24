<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chart;
use DB;
class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

      // $chart = DB::table('charts')->get(['InfoCharts','created_at']);
      // return view('show.InfoChart');
      $chart= chart::all();
      return view('InfoChart',['chart'=> $chart]);
      // $chart = chart::select(DB::raw("SUM(InfoCharts) as count"))
      //     ->orderBy("InfoCharts")
      //     ->groupBy(DB::raw("day(created_at)"))
      //     ->get()->toArray();
      // $chart = array_column(chart ,'count');
      //
      // $click = Click::select(DB::raw("SUM(numberofclick) as count"))
      //     ->orderBy("InfoCharts")
      //     ->groupBy(DB::raw("day(created_at)"))
      //     ->get()->toArray();
      // $click = array_column($click, 'count');
      // return view('highchart')
      //         ->with('chart',json_encode($chart,JSON_NUMERIC_CHECK))
      //         ->with('click',json_encode($click,JSON_NUMERIC_CHECK));


}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
