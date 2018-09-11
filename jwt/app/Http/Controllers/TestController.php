<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function index() {
        /*Log::info(request()->header('api_token'));*/
        return response()->json(['foo'=>'Hello World']);
    }
}
