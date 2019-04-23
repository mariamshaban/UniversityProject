<?php

namespace App\Http\Controllers;

use App\About;
use App\Article;
use App\City;
use App\Contact;
use App\Language;
use App\Service;
use App\Setting;
use App\Slider;
use App\Time;
use App\University;
use App\University_lang;
use Illuminate\Http\Request;
use DB;

class WbsiteController extends Controller
{
    //
    public function admin(){
    return view('layouts.admin');
    }
    public function index(){
        $universities=University::all();
        $slider=Slider::all();
        //$articles=Article::all();
        $lastarticles = Article::orderBy('id','DESC')->take(3)->get();


        return view('welcome',compact('universities','slider','lastarticles'));
    }

    public function universities(){
        $universities=University::all();
        $type=University::where('type',0)->count();
        $type2=University::where('type',1)->count();
        $open=University::where('status',1)->count();
        $close=University::where('status',0)->count();
        $except=University::where('exam',1)->count();
        $notex=University::where('exam',0)->count();
        $cities=City::all();
        $counlang=University_lang::groupBy('lang_id')->select(DB::raw('count(lang_id) as Count'),'lang_id')->with('lang')->get();
        return view('website.universities',compact('universities','type','type2','open','close','except','notex','cities','counlang')) ;
    }
    public function searchUniversity(){
        $typ = $_POST['type'];
        if($typ == 'input'){
            $s = $_POST['search'];
            $search1 = University::where('name_en','LIKE','%'.$s.'%')->get();
            $search2 = University::where('name_ar','LIKE','%'.$s.'%')->get();
            $search = $search1->merge($search2);
        }
        if($typ == 'select'){
            $s = $_POST['city'];
            if($s == 0){
                $search = University::all();
            }else{
                $search = University::where('city_id',$s)->get();
            }
        }
            $html = view('website.search_result',compact('search'))->render();
            $ids = [];
            foreach($search as $s){
                $ids[] = $s->id;
            }
            
            $type=University::whereIN('id',$ids)->where('type',0)->count();
            $type2=University::whereIN('id',$ids)->where('type',1)->count();
            $open=University::whereIN('id',$ids)->where('status',1)->count();
            $close=University::whereIN('id',$ids)->where('status',0)->count();
            $except=University::whereIN('id',$ids)->where('exam',1)->count();
            $notex=University::whereIN('id',$ids)->where('exam',0)->count();

            $counlang=University_lang::whereIN('university_id',$ids)->groupBy('lang_id')->select(DB::raw('count(lang_id) as Count'),'lang_id')->with('lang')->get();
            $data = [
                'html' => $html,
                'type' => $type,
                'type2' => $type2,
                'open' => $open,
                'close' => $close,
                'except' => $except,
                'notex' => $notex,
                'counlang' => $counlang
            ];
            return $data;
        //return response()->json(['search'=>$search]);
    }

    public function articles(){
        $articles= Article::all();
        return view('website.articles',compact('articles'));
    }

    public function aboutus()

    {
        $aboutus= About::first();
        $services=Service::all();
        return view('website.aboutus',compact('aboutus','services'));
    }
    public function contact(){
        $contact=Contact::first();
        $setting= Setting::first();
        return view('website.contact',compact('contact','setting'));
    }
    public function cont(){
        $setting= Setting::all();
        $about= About::all();
        $contact=Contact::first();

        $lastarticles = Article::orderBy('id','DESC')->take(3)->get();

        return view('layouts.app',compact('setting','about','lastarticles','contact'));
    }

    public function contactData(Request $request){
        $contact= new Contact();
        $contact->mail=$request->mail;
        $contact->name=$request->name;
        $contact->phone=$request->phone;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->save();
        return back();
    }

    public function university($id)
    {
        $university =University::where('id',$id)->first();
        $lang=Language::first();
        $time=Time::where('type',1)->get();
        $time1=Time::where('type',0)->get();
        return view('website.university',compact('university','lang','time','time1'));

    }
    public function article($id){
         $article= Article::where('id',$id)->first();
        $lastarticles = Article::orderBy('id','DESC')->take(3)->get();

        return view('website.article',compact('article','lastarticles'));
    }



}
