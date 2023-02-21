<?php

namespace App\Http\Controllers\Admin;

use App\Models\JourneysModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminJourneyController extends Controller
{
    public function journey(){
        $journeys = JourneysModel::all();
        // dd($guiders[0]->getMemberships[0]->title);
        return view('admin.journeys.journeys-list',compact('journeys'));
    }
}
