<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use  Image;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $about=About::all();
        return view('admin.about.about',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $about=About::all();
        return view('admin.about.addabout',compact('about'));
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
        $about=new About();
        $about->title=$request->title;
        $about->title2=$request->title2;
        $about->text=$request->text;


        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( base_path('uploads/about/' . $filename ) );
            $about->image = $filename;
            $about->save();
        };
        $about->save();
        return redirect('about');
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
        $about=About::find($id);
        return view('admin.about.editabout',compact('about'));
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
        $about=About::find($id);
        $about->title=$request->title;
        $about->title2=$request->title2;
        $about->text=$request->text;


        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( base_path('uploads/about/' . $filename ) );
            $about->image = $filename;
            $about->save();
        };
        $about->save();
        return redirect('about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
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
            $about= About::findOrFail($id);
            $img_path = base_path() . '/uploads/about/';

            if ($about->image != null) {
                unlink(sprintf($img_path . '%s', $about->image));
            }
            $about->delete();
        }
    }

}
