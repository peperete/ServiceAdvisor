<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Service;
use \App\Category;

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
      $services = Service::paginate(5);
      return view('services', ['services' => $services]);
    }

    public function servicesFiltered(Request $request)
    {
        $filter = $request->input('filter');
        $value = $request->input('value');
        if (is_null($value)) {
          $services = Service::paginate(5);
        } else {
          $services = Service::where($filter,'like', '%'.$value.'%')->paginate(5);
        }
        return view('services', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('serviceCreate',['categories'=>$categories]);
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
      $categories = Category::all();
      return view('serviceEdit', ['service'=>$service, 'categories'=>$categories]);
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
