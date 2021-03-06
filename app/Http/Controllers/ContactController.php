<?php

namespace App\Http\Controllers;

use App\models\contact;
use Illuminate\Http\Request;


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

  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {

    $contact = new Contact;


    // Pass the referral select options as an array
    $lkupReferral = \App\models\codeReferral::all()->pluck('description','id');

    return view('pages.contact')->with(['lkupReferral'=>$lkupReferral]);


  }

  /*
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $request->validate([
           'first_name' => 'required|alpha|max:60',
           'surname' => 'required|alpha_dash|max:60',
           'email' => 'required_without:telephone|nullable|email|max:100',
           'telephone' => 'required_without:email|nullable|string',
           'referral'=> 'nullable|integer',
           'description'=>'required|filled',
       ]);
    $contact = new Contact;

    $contact->first_name= $request->first_name;
    $contact->surname=$request->surname;
    $contact->email=$request->email;
    $contact->telephone=$request->telephone;
    $contact->referral_source=$request->referral;
    $contact->description=$request->description;

    $contact->save();

    return view('pages.success');

  }

  /**
  * Display the specified resource.
  *
  * @param  \App\contact  $contact
  * @return \Illuminate\Http\Response
  */
  public function show(contact $contact)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\contact  $contact
  * @return \Illuminate\Http\Response
  */
  public function edit(contact $contact)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\contact  $contact
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, contact $contact)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\contact  $contact
  * @return \Illuminate\Http\Response
  */
  public function destroy(contact $contact)
  {
    //
  }
}
