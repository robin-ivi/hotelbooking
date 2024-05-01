<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
class Dashboard extends Controller
{
    public function index()
	{
        $datass = Booking::limit(10)->orderBy('updated_at', 'desc')->get();
        $data = Room::where('room_status','checkout')->get();
        $bdata = Room::where('room_status','booked')->get();
        $bookiing = Booking::orderBy('updated_at', 'desc')->limit('10')->get();
        $booked = Booking::where('status','booked')->get();
        $checkout = Booking::where('status','checkout')->get();
	    return view('dashboard', compact('data','bdata','bookiing','booked','checkout'));
	}
}
