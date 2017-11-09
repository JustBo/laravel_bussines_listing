<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return 'Index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('createlisting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //validate form
      $this->validate($request, [
        'name' => 'required',
        'email' => 'email'
      ]);
      //Create listing
      // $listing = Listing::create( $request->all() );
      $listing = \Auth::user()->listings()->create( $request->all() );
      return redirect('/dashboard')->with('success','Listing added');
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
      $listing = Listing::findOrFail($id);
      return view('editlisting')->with( compact('listing') );
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
      //validate form
      $this->validate($request, [
        'name' => 'required',
        'email' => 'email'
      ]);
      //Update listing
      $listing = Listing::findOrFail( $id );
      $listing->update( $request->input() );
      return redirect('/dashboard')->with('success','Listing updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $listing = Listing::findOrFail( $id );
      $listing->delete();
      return redirect('/dashboard')->with('success','Listing removed');
    }
}
