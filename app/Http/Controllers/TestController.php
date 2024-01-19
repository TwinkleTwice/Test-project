<?php

namespace App\Http\Controllers;

use App\Events\TestEvent;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function event(Request $request)
    {
        $message = $request->input('message', 'Сообщение не передано');

        TestEvent::dispatch($message);

        return response()->json(['message' => 'Event dispatched']);
    }
}
