<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\roomCategory;

class RoomCategoryController extends Controller
{
    public function index()
	{
        $data = roomCategory::all();
	    return view('room.roomCategory', compact('data'));
	}
	 
    public function store(Request $request)
    {
        roomCategory::create($request->all());
        return redirect('roomCategory-list')->with('success', 'Category created successfully.');
    }

    public function destroy($id)
    {
        $data = roomCategory::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Category deleted successfully.');
    }
	 
}
