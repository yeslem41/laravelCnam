<?php

namespace App\Http\Controllers;
use App\Models\reponse;
use App\Models\reclamation;
use Illuminate\Http\Request;

class ReponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'reponse'=>'required|min:10',
            'etat'=>'required',
        ]);
        $reponse = new reponse();
        $reponse->body = $request->reponse;
        $reponse->recla_id = $request->rId;
        $reponse->etat = $request->etat;
        $reponse->superUser = $request->rUser;
        $reponse->save();
       
             reclamation::where('id',$request->rId)->update([
                'repondre'=>1,
                  ]);
       return redirect('/reclamations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function show(reponse $reponse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function edit(reponse $reponse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reponse $reponse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function destroy(reponse $reponse)
    {
        //
    }
}
