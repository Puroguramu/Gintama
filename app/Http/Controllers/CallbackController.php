<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallbackController extends Controller
{
    public function callback(Request $request)
    {
        \Log::info("request => " . print_r($request->all(), true));
        return response('success');
    }
}
