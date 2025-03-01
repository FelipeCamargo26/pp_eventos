<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class MainController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('layouts.main_layouts', ['events' => $events]);
    }
}
