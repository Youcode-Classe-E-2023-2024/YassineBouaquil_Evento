<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index(){
        $userCount = User::count();
        $eventCount = Event::count();
        $black_hover = 'statistics';

        return view('statistics', compact('userCount', 'eventCount','black_hover'));
    }

}
