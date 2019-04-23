<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use  Image;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles=Article::all();
        return view('admin.articles.articles',compact('articles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin.articles.addarticles');
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

        $articles=new  Article();
        $articles->name=$request->name;
        $articles->short_description=$request->short_description;
        $articles->text=$request->text;


        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( base_path('uploads/articles/' . $filename ) );
            $articles->image = $filename;
            $articles->save();
        };
        $articles->save();
        return redirect('articl');
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
        //
        $article=Article::find($id);

        return view('admin.articles.editearticles',compact('article'));


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

        $articles= Article::find($id);
        $articles->name=$request->name;
        $articles->short_description=$request->short_description;
        $articles->text=$request->text;


        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( base_path('uploads/articles/' . $filename ) );
            $articles->image = $filename;
            $articles->save();
        };
        $articles->save();
        return redirect('articl');
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
            $article= Article::findOrFail($id);
            $img_path = base_path() . '/uploads/articles/';

            if ($article->image != null) {
                unlink(sprintf($img_path . '%s', $article->image));
            }
            $article->delete();
        }
    }
}
