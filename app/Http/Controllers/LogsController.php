<?php

namespace App\Http\Controllers;

class LogsController extends Controller
{

    /**
     * Sends notification to PagerDuty
     */
    public function sendLog()
    {
        return view('welcome');
    }
}
