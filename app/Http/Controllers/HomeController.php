<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function events(){
        $calendardata = array
                      (
                        "0" => array
                                  (
                                   "title" => "Event One",
                                   "start" => "2020-08-08",
                                   ),
                        "1" => array
                                   (
                                    "title" => "Event Two",
                                    "start" => "2020-08-06",
                                   ),
                        "2" => array
                        (
                        "title" => "Event Three",
                        "start" => "2020-08-10",
                        )
                      );
        return response()->json(["calendardata" => $calendardata]);
      }
}
