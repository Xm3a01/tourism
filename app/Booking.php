<?php

namespace App;

use App\Place;
use App\Company;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    protected $guarded = [];
    
    public function place()
    {
        return $this->belongsTo(Place::class);
        
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
        
    }
}
