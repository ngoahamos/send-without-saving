<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class PhoneController extends Controller
{


    public function home()
    {
        Log::create([
            'ip' => \request()->ip()
        ]);
        session()->flash('loc_token', 'aae88d0e1adf5f');
        return view('welcome');
    }

    public function send(Request $request)
    {
        dd($request);
    }
}
