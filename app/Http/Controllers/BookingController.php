<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Napa\R19\Sms;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::orderby('id', 'DESC')->get();
        return view('admin.bookings.index', [
           'bookings' => $bookings,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (strlen($request['phone']) == 9){
            $booking = new Booking();
            $booking['course_id'] = htmlspecialchars($request['course_id']);
            $booking['name'] = htmlspecialchars($request['name']);
            $booking['surname'] = htmlspecialchars($request['surname']);
            $booking['email'] = htmlspecialchars($request['email']);
            $booking['phone'] = htmlspecialchars($request['phone']);
            $booking->save();
            $phone = "998".$request['phone'];
            $name = $request['name'];
            $message = "Assalomu alaykum hurmatli {$name}! Siz AmuSoft o'quv kursiga ro'yxatdan o'tdingiz. Tez orada operatorlarimiz siz bilan bog'lanishadi!";
            Sms::send($phone, $message);
        }
        else{
            return redirect()->route('course')->with('error', 'Xatolik');
        }
        return redirect()->route('course')->with('success', 'created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index');
    }
}
