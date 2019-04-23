<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use  Image;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contact=Contact::all();
         return view('admin.contact.contact',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       // $contact=Contact::all();
      //  return view('admin.contact.addcontact',compact('contact'));
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
        $contact=new Contact();
        $contact->mail=$request->mail;
        $contact->name=$request->name;
        $contact->phone=$request->phone;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->save();
        return redirect('contact');
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
      //  $contact=Contact::find($id);
        //return view('admin.contact.editcontact',compact('contact'));
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
      //  $contact=Contact::find($id);
      //  $contact->mail=$request->mail;
      //  $contact->name=$request->name;
      //  $contact->phone=$request->phone;
      //  $contact->subject=$request->subject;
     //   $contact->message=$request->message;
     //   $contact->save();
      //  return redirect('contact');
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
            $contact = Contact::findOrFail($id);
        }
            $contact->delete();

    }

}
