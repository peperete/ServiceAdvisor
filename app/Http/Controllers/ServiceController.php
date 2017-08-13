<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Service;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $paginate = $request->input('paginate');
      if (is_null($paginate)) {
        $paginate = 15;
      }
      $services = Service::paginate($paginate);
      return view('services', ['services' => $services, 'paginate' => $paginate]);
    }

    public function servicesFiltered(Request $request)
    {
        $filter = $request->input('filter');
        $value = $request->input('value');
        $paginate = $request->input('paginate');
        if (is_null($paginate)) {
          $paginate = 15;
        }
        if (is_null($value)) {
          $services = Service::paginate($paginate);
        } else {
          $services = Service::where($filter,'like', '%'.$value.'%')->paginate($paginate);
        }
        return view('services', ['services' => $services, 'paginate' => $paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('serviceCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required|string|max:255',
        'status' =>'required',
        'category_id' => 'required',
      ]);
        $service = new Service;
        $service->name = $request->input('name');
        $service->photo = $request->input('photo');
        $service->status = $request->input('status');
        $service->category_id = $request->input('category_id');
        $service->save();
        return redirect('/services');
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
      $service = Service::find($id);
      return view('serviceEdit', ['service'=>$service]);
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
      $service = Service::find($id);
      $this->validate($request, [
        'name' => 'required|string|max:255',
        'status' =>'required',
        'category_id' => 'required',
      ]);
      $service->name = $request->input('name');
      $service->photo = $request->input('photo');
      $service->status = $request->input('status');
      $service->category_id = $request->input('category_id');
      $service->save();
      return  redirect('/services');
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
