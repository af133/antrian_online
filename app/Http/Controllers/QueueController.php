<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Queue;
class QueueController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
    public function getQueues()
    {
        $current = Queue::where('status', 'processing')
                        ->whereDate('created_at', now()->toDateString())
                        ->first();

        $waiting = Queue::where('status', 'waiting')
                        ->whereDate('created_at', now()->toDateString())
                        ->get();

        return response()->json([
            'current' => $current,
            'waiting' => $waiting,
        ]);
    }


}
