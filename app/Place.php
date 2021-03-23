<?php

namespace App;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Place extends Model implements HasMedia
{
    use InteractsWithMedia;
   
    protected $guarded = [];

    
     /**
     * Get all of the bookings for the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function getImageAttribute()
    {
        return $this->getFirstMediaUrl('places');
    }
}
