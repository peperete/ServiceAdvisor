<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Category;

class CategoryController extends Controller
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
      $categories = Category::paginate($paginate);
      return view('categories', ['categories' => $categories, 'paginate' => $paginate]);
    }

    public function categoriesFiltered(Request $request)
    {
        $filter = $request->input('filter');
        $value = $request->input('value');
        $paginate = $request->input('paginate');
        if (is_null($paginate)) {
          $paginate = 15;
        }
        if (is_null($value)) {
          $categories = Category::paginate($paginate);
        } else {
          $categories = Category::where($filter,'like', '%'.$value.'%')->paginate($paginate);
        }
        return view('categories', ['categories' => $categories, 'paginate' => $paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoryCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->input('name');
        $category->photo = $request->input('photo');
        $category->status = $request->input('status');
        $category->save();
        return redirect('/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // $category = Category::find($id);
      // return view('categoryEdit', ['category'=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $category = Category::find($id);
      return view('categoryEdit', ['category'=>$category]);
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
      $category = Category::find($id);
      $this->validate($request, [
        'name' => 'required|string|max:255',
        'status' =>'required',
      ]);
      $category->name = $request->input('name');
      $category->photo = $request->input('photo');
      $category->status = $request->input('status');
      $category->save();
      return  redirect('/categories');

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
