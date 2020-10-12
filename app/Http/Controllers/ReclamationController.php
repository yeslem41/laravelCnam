<?php

namespace App\Http\Controllers;
use App\Models\reclamation;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $alReclas = count(reclamation::all());
         $reclas =  reclamation::orderBy('id','desc')->get();
         $data = [$reclas,$alReclas];
      
        return view('pages.reclamations',compact('data'));
    }

    public function affiliationRebourser($type){
        $reclas = reclamation::where('type','=',$type)->orderBy('id','desc')->get();
        $alReclas = count($reclas);
      
        $data = [$reclas,$alReclas];
        return  view('pages.reclamations',compact('data'));
    }
    public function affiliation($etat){
        $reclas = reclamation::where('repondre','=',$etat)->where('type','=','affiliation')->orderBy('id','desc')->get();
        $alReclas = count($reclas);
      
        $data = [$reclas,$alReclas];
        return  view('pages.reclamations',compact('data'));
    }
    public function rembourser($etat){
        $reclas = reclamation::where('repondre','=',$etat)->where('type','=','remboursement')->orderBy('id','desc')->get();
        $alReclas = count($reclas);
      
        $data = [$reclas,$alReclas];
        return  view('pages.reclamations',compact('data'));
    }
    public function etat($etat){
        $reclas = reclamation::where('repondre','=',$etat)->orderBy('id','desc')->get();
        $alReclas = count($reclas);
      
        $data = [$reclas,$alReclas];
        return  view('pages.reclamations',compact('data'));
    }
    public function getRecla($NNI){
         $reclas =  reclamation::where('nni','=',$NNI)->orderBy('id','desc')->get();
         $alReclas= count($reclas);
         $data = [$reclas,$alReclas];
      
        return view('pages.reclamations',compact('data'));
           return reclamation::where('nni','=',$NNI)->get();
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
     * @param  \App\reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function show(reclamation $reclamation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function edit(reclamation $reclamation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reclamation $reclamation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function destroy(reclamation $reclamation)
    {
        //
    }
}
