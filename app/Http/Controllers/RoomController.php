<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\roomCategory;

class RoomController extends Controller
{
    public function index()
	{
        $data = Room::all();
        $cdata = roomCategory::all();
	    return view('room.room', compact('data'),compact('cdata'));
	}
	 
    public function store(Request $request)
    {
        $validated = $request->validate([
            'room_name' => 'required|unique:rooms',
            'room_category' => 'required',
            'room_floor' => 'required',
            'room_bhk' => 'required',
        ]);

        Room::create($request->all());
        return redirect('rooms')->with('success', 'Room created successfully.');
    }

    public function destroy($id)
    {
        $data = Room::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Room deleted successfully.');
    }
}
