<?php

namespace App\Http\Controllers\Website;

use App\Place;
use App\Booking;
use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    
    public function index()
    {
        $comapnies = Company::latest()->get();
        $places = Place::latest()->get();

        return view('website.booking' , [
            'companies' => $comapnies,
            'places' => $places
        ]);
        return view('website.booking');
    }

    public function store(Request $request)
    {
        // return $request->all();
        Booking::create($request->all());
        \Session::flash('success' , 'الارسال بنجاح');
        return back();
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
