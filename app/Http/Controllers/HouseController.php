<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return House[]|Collection
     */
    public function index()
    {
        return House::search()->get();
    }

}
