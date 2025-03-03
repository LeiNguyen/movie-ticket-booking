<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Showtime;
use App\Models\Ticket;
use Auth;

class BookingController extends Controller
{
    // Hiển thị suất chiếu của phim
    public function showtimes($movie_id) {
        $showtimes = Showtime::where('movie_id', $movie_id)->get();
        return view('movies.showtimes', compact('showtimes'));
    }

    // Xử lý đặt vé
    public function bookTicket(Request $request) {
        $request->validate([
            'showtime_id' => 'required|exists:showtimes,id',
            'seats' => 'required|array|min:1'
        ]);

        $showtime = Showtime::findOrFail($request->showtime_id);
        $totalPrice = count($request->seats) * $showtime->price;

        Ticket::create([
            'user_id' => Auth::id(),
            'showtime_id' => $showtime->id,
            'seats' => implode(',', $request->seats),
            'total_price' => $totalPrice
        ]);

        return redirect()->back()->with('success', 'Đặt vé thành công!');
    }
}
