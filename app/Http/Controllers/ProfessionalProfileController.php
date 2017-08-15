<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Professionalprofile;

class ProfessionalprofileController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:professional');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('professionalProfile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('professionalProfileCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $profile = new Professionalprofile;
      $profile->user_id = $request->input('user_id');
      $profile->businessname = $request->input('businessname');
      $profile->doctype = $request->input('doctype');
      $profile->docnumber = $request->input('docnumber');
      $profile->taxstatus = $request->input('taxstatus');
      $profile->comercialname = $request->input('comercialname');
      $profile->generalinfo = $request->input('generalinfo');
      $profile->street = $request->input('street');
      $profile->number= $request->input('number');
      $profile->postalcode= $request->input('postalcode');
      $profile->phone = $request->input('phone');
      $profile->cellphone= $request->input('cellphone');
      $profile->save();
      return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
      $profile = Professionalprofile::find($id);
      $profile->businessname = $request->input('businessname');
      $profile->doctype = $request->input('doctype');
      $profile->docnumber = $request->input('docnumber');
      $profile->taxstatus = $request->input('taxstatus');
      $profile->comercialname = $request->input('comercialname');
      $profile->generalinfo = $request->input('generalinfo');
      $profile->street = $request->input('street');
      $profile->number= $request->input('number');
      $profile->postalcode= $request->input('postalcode');
      $profile->phone = $request->input('phone');
      $profile->cellphone= $request->input('cellphone');
      $profile->save();
      return redirect('/');
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
