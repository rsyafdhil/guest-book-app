<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $room = Room::all();
        return view('details.show', compact('room'));
    }
}
