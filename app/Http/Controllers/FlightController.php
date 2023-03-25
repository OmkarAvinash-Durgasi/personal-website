<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function list()
    {
        return Flight::all();
    }

    public function getById(int $id)
    {
        return Flight::where('id', $id)->get();
    }
}
