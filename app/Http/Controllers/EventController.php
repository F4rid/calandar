<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::whereDate('event_at', Carbon::today())->get();

        return response()->json([
            'events' => $events
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'document_id' => 'required',
            'mobile' => 'required'
        ]);

        try {
            $event = Event::create([
                'name' => request('name'),
                'document_id' => request('document_id'),
                'mobile' => request('mobile')
            ]);

            return response()->json([
                'event' => $event
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error happend during create event.'
            ], 400);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $this->validate($request, [
            'name' => 'required',
            'document_id' => 'required',
            'mobile' => 'required'
        ]);

        $event->name = request('name');
        $event->document_id = request('document_id');
        $event->mobile = request('mobile');
        $event->save();

        return response()->json([
            'event' => $event
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return response()->json([
            'message' => 'Event successfully deleted'
        ], 200);
    }
}
