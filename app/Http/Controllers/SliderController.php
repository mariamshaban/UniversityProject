<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use  Image;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $slider=Slider::all();
        return view('admin.slider.slider',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin.slider.addslider');
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
        $slider=new  Slider();
        $slider->text1=$request->text1;
        $slider->text2=$request->text2;
        $slider->short_description=$request->short_description;
        $slider->link=$request->link;


        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( base_path('uploads/slider/' . $filename ) );
            $slider->image = $filename;
            $slider->save();
        };
        $slider->save();
        return redirect('slider');
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
        $slider=Slider::find($id);

        return view('admin.slider.editslider',compact('slider'));
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
        $slider=Slider::find($id);
        $slider->text1=$request->text1;
        $slider->text2=$request->text2;
        $slider->short_description=$request->short_description;
        $slider->link=$request->link;


        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( base_path('uploads/slider/' . $filename ) );
            $slider->image = $filename;
            $slider->save();
        };
        $slider->save();
        return redirect('slider');
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
            $slider = Slider::findOrFail($id);
            $img_path = base_path() . '/uploads/slider/';

            if ($slider->image != null) {
                unlink(sprintf($img_path . '%s', $slider->image));
            }
            $slider->delete();
        }
    }
}
