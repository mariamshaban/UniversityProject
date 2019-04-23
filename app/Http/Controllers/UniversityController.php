<?php

namespace App\Http\Controllers;

use App\Language;
use App\University_lang;
use Illuminate\Http\Request;
use App\University;
use App\City;
use  Image;
class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $universities = University::all();
        return view('admin.university.university', compact('universities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cities = City::all();
        $languages = Language::all();
        return view('admin.university.adduniversity', compact('cities','languages'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $university = new  University();
        $university->name_ar = $request->name_ar;
        $university->name_en = $request->name_en;
        $university->type = $request->type;
        $university->city_id = $request->city_id;
        $university->status = $request->status;
        $university->int_order = $request->int_order;
        $university->loc_order = $request->loc_order;
        $university->est_date = date('Y-m-d',strtotime($request->est_date));
        $university->uni_website = $request->uni_website;
        $university->latitude = $request->latitude;
        $university->longitude = $request->longitude;
        $university->about = $request->about;
        $university->exam = $request->exam;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save(base_path('uploads/university/' . $filename));
            $university->image = $filename;
            $university->save();
        };
        $university->save();
        $languages = $request->language;
        foreach ($languages as $language){
            $add=new University_lang();
            $add->university_id= $university->id ;
            $add->lang_id= $language;
            $add->save();
        }
        return redirect('universit');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $university = University::find($id);
        $cities = City::all();
        $languages = Language::all();
        $lang=University_lang::where('university_id',$university->id)->pluck('lang_id')->toArray();
        return view('admin.university.editeuniversity', compact('university', 'cities','lang','languages'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $university = University::find($id);
        $university->name_ar = $request->name_ar;
        $university->name_en = $request->name_en;
        $university->type = $request->type;
        $university->city_id = $request->city_id;
        $university->status = $request->status;
        $university->int_order = $request->int_order;
        $university->loc_order = $request->loc_order;
        $university->est_date = $request->est_date;
        $university->uni_website = $request->uni_website;
        $university->latitude = $request->latitude;
        $university->longitude = $request->longitude;
        $university->about = $request->about;
        $university->exam = $request->exam;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save(base_path('uploads/university/' . $filename));
            $university->image = $filename;
            $university->save();
        };
        $university->save();
        $languages = $request->language;
        if($languages){
            University_lang::where('university_id',$id)->delete();
            foreach ($languages as $language){
                $add=new University_lang();
                $add->university_id= $university->id ;
                $add->lang_id= $language;
                $add->save();
            }
        }

        return redirect('universit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ids)
    {
        //
        $ids = explode(',', $ids);
        if ($ids[0] == 'on') {
            unset($ids[0]);
        }
        foreach ($ids as $id) {
            $university = University::findOrFail($id);
            $img_path = base_path() . '/uploads/university/';

            if ($university->image != null) {
                unlink(sprintf($img_path . '%s', $university->image));
            }
            $university->delete();
        }
    }
}
