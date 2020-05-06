<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    //Disable timestamps fields as we do not use it
    public $timestamps = false;

    public function scopeSearch($query)
    {
        if(request('name'))
        {
            $query->where('name', 'LIKE', '%'.request('name').'%');
        }
        if(request('price'))
        {
            $query->where('price', '>=', request('price')[0])->where('price', '<=', request('price')[1]);
        }
        if(request('bedrooms'))
        {
            $query->where('bedrooms', request('bedrooms'));
        }
        if(request('bathrooms'))
        {
            $query->where('bathrooms', request('bathrooms'));
        }
        if(request('storeys'))
        {
            $query->where('storeys', request('storeys'));
        }
        if(request('garages'))
        {
            $query->where('garages', request('garages'));
        }
        return $query;
    }

}
