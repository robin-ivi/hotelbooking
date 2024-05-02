<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\roomCategory;
use App\Models\Room;
use App\Models\Booking;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
	{
        $rcountery = Country::all();
        $roomCategory = roomCategory::all();
        $room = Room::where('room_status','checkout')->get();
	    return view('booking.index',compact('rcountery'),compact('roomCategory'),compact('room'));
	}

    public function getRooms(Request $request)
    {
        $cat = $request->categoryId;
        $rooms = Room::whereIn('room_category', $cat)->where('room_status','checkout')->get();
        return response()->json($rooms);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'type_of_room' => 'required',
            'room' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
        ]);

        $booking = new Booking();
        $booking->name = $request->input('name');
        $booking->status = $request->input('status');
        $booking->email = $request->input('email');
        $booking->phone_no = $request->input('phone_no');
        $booking->travel_type = $request->input('travel_type');
        $booking->id_proof_type = json_encode($request->input('id_proof_type')); // Store as JSON string
        $booking->booked_via = $request->input('booked_via');
        $booking->billing_instr = $request->input('billing_instr');
        $booking->payment_mode = $request->input('payment_mode');
        $booking->country = $request->input('country');
        $booking->type_of_room = json_encode($request->input('type_of_room')); // Store as JSON string
        $booking->room = json_encode($request->input('room')); // Store as JSON string
        $booking->room_category = $request->input('room_category');
        $booking->occupancy = $request->input('occupancy');
        $booking->addvanced_amount = $request->input('addvanced_amount');
        $booking->amount = $request->input('amount');
        $booking->booked_by = $request->input('booked_by');
        $booking->check_in = $request->input('check_in');
        $booking->check_out = $request->input('check_out');
        
        $booking->save();
        foreach ($request->input('room') as $roomName) {
            $room = Room::where('room_name', $roomName)->first();
            if ($room) {
                $room->room_status = 'booked';
                $room->save();
            }
        }
    
        return redirect('booking')->with('success', 'Booking created successfully.');
    }

    public function list()
    {
        $data = Booking::orderBy('id', 'DESC')->get();
        return view('booking.booking-list', compact('data'));
    }

    public function destroy($id)
    {
        $data = Booking::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Booking deleted successfully.');
    }

    public function view($id)
    {
        $data = Booking::where('id', $id)->get();
        return view('booking.booking-view', compact('data'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'addvanced_amount' => 'required',
            'amount' => 'required',
            'check_out' => 'required',
            'status' => 'required',
        ]);

        $booking = Booking::find($request->input('id'));
        $booking->name = $request->input('name');
        $booking->status = $request->input('status');
        $booking->email = $request->input('email');
        $booking->phone_no = $request->input('phone_no');
        $booking->addvanced_amount = $request->input('addvanced_amount');
        $booking->amount = $request->input('amount');
        $booking->check_out = $request->input('check_out');
        $booking->status = $request->input('status');
        
        $booking->save();
        
        // Array of room names to update
        $roomNames = $request->input('room');
        // dd(json_decode($roomNames[0]));
        // Update rooms with the specified names to "booked"
        Room::whereIn('room_name', json_decode($roomNames[0]))->update(['room_status' => $request->input('status')]);
                
        
    
        return redirect()->back()->with('success', 'Booking Update successfully.');
    }


    

public function inoicelist()
{
    $data = Booking::where('status','checkout')->orderBy('id', 'DESC')->get();
    return view('booking.invoice-list', compact('data'));
}

public function invoiceview($id)
{
    $data = Booking::where('id', $id)->get();
    return view('booking.invoice', compact('data'));
}

}