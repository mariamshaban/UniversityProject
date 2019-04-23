<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use  Image;
use  File;


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $setting=Setting::all();
        return view('admin.setting.setting',compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin.setting.addsetting');
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
        $setting=new  Setting();
        $setting->name=$request->name;
        $setting->facebook=$request->facebook;
        $setting->twitter=$request->twitter;
        $setting->instgram=$request->instgram;
        $setting->pinterst=$request->pinterst;
        $setting->google_plus=$request->google_plus;
        $setting->linkedin=$request->linkedin;
        $setting->email=$request->email;
        $setting->phone=$request->phone;
        $setting->address=$request->address;
        $setting->longitude=$request->longitude;
        $setting->latitude=$request->latitude;



        if($request->hasFile("logo")) {

            $file = $request->file("logo");
            $mime = File::mimeType($file);
            $mimearr = explode('/', $mime);

            // $destinationPath = base_path() . '/uploads/'; // upload path
            $extension = $mimearr[1]; // getting file extension
            $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
            $path = base_path('uploads/setting/source/' . $fileName);
            $resize200 = base_path('uploads/setting/resize200/' . $fileName);
            $resize800 = base_path('uploads/setting/resize800/' . $fileName);
            //  $file->move($destinationPath, $fileName);

            Image::make($file->getRealPath())->save($path);

            $arrayimage = list($width, $height) = getimagesize($file->getRealPath());
            $widthreal = $arrayimage['0'];
            $heightreal = $arrayimage['1'];

            $width200 = ($widthreal / $heightreal) * 200;
            $height200 = $width200 / ($widthreal / $heightreal);

            $img200 = Image::canvas($width200, $height200);
            $image200 = Image::make($file->getRealPath())->resize($width200, $height200, function ($c) {
                $c->aspectRatio();
                $c->upsize();
            });
            $img200->insert($image200, 'center');
            $img200->save($resize200);

            $width800 = ($widthreal / $heightreal) * 800;
            $height800 = $width800 / ($widthreal / $heightreal);

            $img800 = Image::canvas($width800, $height800);
            $image800 = Image::make($file->getRealPath())->resize($width800, $height800, function ($c) {
                $c->aspectRatio();
                $c->upsize();
            });
            $img800->insert($image800, 'center');
            $img800->save($resize800);

            $setting->logo = $fileName;
        }



        if($request->hasFile('video')){
            $oneVideo = $request->video;
            $extension = $oneVideo->getClientOriginalExtension();
            $filename = rand(11111111, 99999999). '.' . $extension;
            $path = base_path('uploads/setting/video/');
            $oneVideo->move($path, $filename );
            $setting->video = $filename;
        }


        $setting->save();
        return redirect('setting');
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
        $setting=Setting::find($id);

        return view('admin.setting.editsetting',compact('setting'));
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
        $setting=Setting::find($id);
        $setting->name=$request->name;
        $setting->facebook=$request->facebook;
        $setting->twitter=$request->twitter;
        $setting->instgram=$request->instgram;
        $setting->pinterst=$request->pinterst;
        $setting->google_plus=$request->google_plus;
        $setting->linkedin=$request->linkedin;
        $setting->email=$request->email;
        $setting->phone=$request->phone;
        $setting->address=$request->address;
        $setting->longitude=$request->longitude;
        $setting->latitude=$request->latitude;

        if($request->hasFile("logo")) {

            $file = $request->file("logo");
            $mime = File::mimeType($file);
            $mimearr = explode('/', $mime);

            // $destinationPath = base_path() . '/uploads/'; // upload path
            $extension = $mimearr[1]; // getting file extension
            $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
            $path = base_path('uploads/setting/source/' . $fileName);
            $resize200 = base_path('uploads/setting/resize200/' . $fileName);
            $resize800 = base_path('uploads/setting/resize800/' . $fileName);
            //  $file->move($destinationPath, $fileName);

            Image::make($file->getRealPath())->save($path);

            $arrayimage = list($width, $height) = getimagesize($file->getRealPath());
            $widthreal = $arrayimage['0'];
            $heightreal = $arrayimage['1'];

            $width200 = ($widthreal / $heightreal) * 200;
            $height200 = $width200 / ($widthreal / $heightreal);

            $img200 = Image::canvas($width200, $height200);
            $image200 = Image::make($file->getRealPath())->resize($width200, $height200, function ($c) {
                $c->aspectRatio();
                $c->upsize();
            });
            $img200->insert($image200, 'center');
            $img200->save($resize200);

            $width800 = ($widthreal / $heightreal) * 800;
            $height800 = $width800 / ($widthreal / $heightreal);

            $img800 = Image::canvas($width800, $height800);
            $image800 = Image::make($file->getRealPath())->resize($width800, $height800, function ($c) {
                $c->aspectRatio();
                $c->upsize();
            });
            $img800->insert($image800, 'center');
            $img800->save($resize800);
            $setting->logo = $fileName;
        }

        if($request->hasFile('video')){
            $oneVideo = $request->video;
            $extension = $oneVideo->getClientOriginalExtension();
            $filename = rand(11111111, 99999999). '.' . $extension;
            $path = base_path('uploads/setting/video/');
            $oneVideo->move($path, $filename );
            $setting->video = $filename;
        }
        $setting->save();
        return redirect('setting');
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
            $setting = Setting::findOrFail($id);
            $img_path = base_path() . '/uploads/setting/source/';
            $img_path200 = base_path() . '/uploads/setting/resize200/';
            $img_path800 = base_path() . '/uploads/setting/resize800/';
            $path = base_path('/uploads/setting/video/');


            if ($setting->logo && $setting->video != null) {
                unlink(sprintf($img_path . '%s', $setting->logo));
                unlink(sprintf($img_path200 . '%s', $setting->logo));
                unlink(sprintf($img_path800 . '%s', $setting->logo));
                unlink(sprintf($path . '%s', $setting->video));
            }
            $setting->delete();
        }
    }
}
