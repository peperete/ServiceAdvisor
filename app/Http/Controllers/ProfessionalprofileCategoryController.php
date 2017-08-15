<?php

namespace App\Http\Controllers;

use App\ProfessionalprofileCategory;
use Illuminate\Http\Request;
use \App\Category;
use \App\Professionalprofile;
use Illuminate\Support\Facades\Auth;

class ProfessionalprofileCategoryController extends Controller
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
        $user = Auth::user();
        $profile = $user->professionalProfile;
        // $categories = $profile->categories;
        $categories = ProfessionalprofileCategory::where('professionalprofile_id', $profile->id)->get();
        return view('professionalprofileCategories', ['user'=>$user, 'profile'=>$profile,  'categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $profile = $user->professionalProfile;
        $categories = Category::all();
        return view('professionalprofileCategoriesCreate', ['user'=>$user, 'profile'=>$profile, 'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $profileCategory = new ProfessionalprofileCategory;
      $profileCategory->professionalprofile_id = $request->input('professionalprofile_id');
      $profileCategory->category_id = $request->input('category_id');
      $profileCategory->status = $request->input('status');
      $profileCategory->save();
      return redirect('/professionalprofileCategories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProfessionalprofileCategory  $professionalprofileCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProfessionalprofileCategory $professionalprofileCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProfessionalprofileCategory  $professionalprofileCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $profCategory = ProfessionalprofileCategory::find($id);
      return view('professionalprofileCategoryEdit', ['profCategory'=>$profCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProfessionalprofileCategory  $professionalprofileCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $profCategory = ProfessionalprofileCategory::find($id);
      $profCategory->status = $request->input('status');
      $profCategory->save();
      return  redirect('/professionalprofileCategories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProfessionalprofileCategory  $professionalprofileCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfessionalprofileCategory $professionalprofileCategory)
    {
        //
    }
}
