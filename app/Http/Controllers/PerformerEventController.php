<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\EventCollecton;
use App\Models\Event;
use App\Models\Performer;

class PerformerEventController extends Controller
{
    //
    public function index($performer_id)
    {
        $performer = Performer::find($performer_id);
        if (is_null($performer)) {
            return response()->json('Performer not found', 404);
        }

        $events = Event::get()->where('performer_id', $performer_id);
        if (is_null($events)) {
            return response()->json('Events not found', 404);
        }

        return response()->json([
            'performer' => $performer->name,
            'events' => new EventCollecton($events)
        ]);
    }
}
