<?php

namespace App\Http\Controllers;
use App\Models\Queue;
class QueueController extends Controller
{
    public function index()
    {
        return view('queue.index');
    }
    public function getQueues()
    {
        $current = Queue::where('status', 'processing')->first();
        $waiting = Queue::where('status', 'waiting')->orderBy('queue_number')->get();

        return response()->json([
            'current' => $current,
            'waiting' => $waiting,
        ]);
    }

    public function nextQueue()
    {
        $current = Queue::where('status', 'processing')->first();
        if($current) $current->update(['status' => 'done']);

        $next = Queue::where('status', 'waiting')->orderBy('queue_number')->first();
        if($next) $next->update(['status' => 'processing']);

        return response()->json(['success' => true]);
    }

    public function prevQueue()
    {
        $current = Queue::where('status', 'processing')->first();
        if($current) $current->update(['status' => 'waiting']);

        $prev = Queue::where('status', 'done')->orderBy('queue_number', 'desc')->first();
        if($prev) $prev->update(['status' => 'processing']);

        return response()->json(['success' => true]);
    }
    public function createQueue()
    {
        $lastQueue = Queue::whereDate('created_at', now()->toDateString())
                        ->orderBy('queue_number', 'desc')
                        ->first();
        $number = $lastQueue ? $lastQueue->queue_number + 1 : 1;
        $queue = Queue::create([
            'queue_number' => $number,
            'status' => 'waiting',
            'admin_id' => auth()->guard('admin')->id(),
        ]);

        return response()->json(['success' => true, 'queue' => $queue]);
    }
    public function publicQueue()
    {
        return view('public_queue');
    }



}
