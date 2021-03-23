<?php

namespace App\Http\Controllers\Dashboard;

use App\Place;
use Illuminate\Http\Request;
use App\Traits\AttachmentTrait;
use App\Http\Controllers\Controller;

class PlaceController extends Controller
{
    use AttachmentTrait;

   
    public function index()
    {
        $places = Place::latest()->paginate(100);

        return view('dashboard.places.index' , ['places' => $places]);
    }

    
    public function create()
    {
        return view('dashboard.places.create');

    }

    
    public function store(Request $request)
    {
        $place = Place::create($request->except('image'));
        $this->singleFile($request->image , $place , 'places');

        \Session::flash('success' , 'تم الحفظ بنجاح');
        return redirect()->route('places.index');
    }


    public function edit(Place $place)
    {
        return view('dashboard.places.edit' , ['place' => $place]);

    }

    public function update(Request $request, Place $place)
    {
        $place->update($request->except('image'));
        if($request->has('image')){
            $place->clearMediaCollection('places');
            $this->singleFile($request->image , $place , 'places');
        }

        \Session::flash('success' , 'تم التعديل بنجاح');
        return redirect()->route('places.index');
    }

    public function destroy(Place $place)
    {
        if($place->image){
          $place->clearMediaCollection('places');
        }

        $place->delete();

        \Session::flash('success' , 'تم الحذف بنجاح');
        return redirect()->route('places.index');
    }
}
