<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\TestJob;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $job = (new TestJob())->onQueue('redis');
        $this->dispatch($job);
        return response()->json(["status" => "ok"]);
    }
}
