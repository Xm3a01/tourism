<?php

namespace App\Http\Controllers\Dashboard;

use App\Place;
use App\Booking;
use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    
    public function index()
    {
        $bookings = Booking::latest()->paginate(100);
        return view('dashboard.bookings.index' , ['bookings' => $bookings]);
    }

    
    public function create()
    {
        $companies = Company::all();
        $places = Place::all();

        return view('dashboard.bookings.create',[
            'companies' => $companies,
            'places' => $places
        ]);
    }

   
    public function store(Request $request)
    {
        $booking = Booking::create($request->all());
        

        \Session::flash('success' , 'تم الحفظ بنجاح');
        return redirect()->route('bookings.index');
    }


    public function edit(Booking $booking)
    {
        $companies = Company::all();
        $places = Place::all();

        return view('dashboard.bookings.edit',[
            'companies' => $companies,
            'places' => $places,
            'booking' => $booking
        ]);
    }

    public function update(Request $request, Booking $booking)
    {
        $booking->update($request->all());
        

        \Session::flash('success' , 'تم التعديل بنجاح');
        return redirect()->route('bookings.index');
    }

    public function destroy(Booking $booking)
    {

        $booking->delete();

        \Session::flash('success' , 'تم الحذف بنجاح');
        return redirect()->route('bookings.index');
    }
}
