<?php

namespace App\Http\Controllers;

use App\Models\Malogin;
use Illuminate\Http\Request;
use Carbon\Carbon;
class MaloginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $result = DB::connection('mysql_second')->select("SELECT * FROM tabletest");
        // return $result;
        $alLOGIN = count(Malogin::all());
         $login =  Malogin::orderBy('id','desc')->get();
         $data = [$login,$alLOGIN];
      
        return view('pages.index',compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Malogin  $malogin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $login = Malogin::where('loged',$id)->get();
        $alLOGIN = count($login);
        $data = [$login,$alLOGIN];
         return view('pages.index',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Malogin  $malogin
     * @return \Illuminate\Http\Response
     */
    public function edit(Malogin $malogin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Malogin  $malogin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Malogin $malogin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Malogin  $malogin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Malogin $malogin)
    {
        //
    }
    public function month($id){
        $result =  Malogin::whereMonth('created_at','=',$id)
                        ->orderBy('malogins.created_at','desc')
                        ->get();
        $alLOGIN = count($result);
        $data = [$result,$alLOGIN];
        // return $data;
        if($alLOGIN==0){
            $data[2] = 'not one signin in this month!!! from month';
           return view('pages.index',compact('data'));
        }else
         return view('pages.index',compact('data'));           
    }
    public function monthSpecifique($id){
        // return response()->json($request);
        $date = new Carbon($id);
        $month = $date->month;
        $year = $date->year;
        $result = Malogin::whereMonth('malogins.created_at','=',$month)
                        ->whereYear('malogins.created_at','=',$year)
                        ->orderBy('malogins.created_at','desc')
                        ->get();
         $alLOGIN = count($result);
          $data = [$result,$alLOGIN];
            // return $result;
            if($alLOGIN==0){
                $data[2] = 'not one signin in this month!!!from monthSpecifi';
               return view('pages.index',compact('data'))->with('notone','not one signin in this month!!!');
            }else
            return view('pages.index',compact('data'));
            // return $data;            
    }
    public function year($id){
       $result = Malogin::whereYear('created_at','=',$id)->orderBy('malogins.created_at','desc')->get();
       $alLOGIN = count($result);
       $data = [$result,$alLOGIN];
       if($alLOGIN==0){
                    $data[2] = 'not one signin in this year!!! from year';
                return view('pages.index',compact('data'));
         }else
                return view('pages.index',compact('data')); 
    }
}
