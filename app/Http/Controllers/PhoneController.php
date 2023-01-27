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
        session()->flash('loc_token', config('app.loc_token'));
        return view('welcome');
    }

    public function send(Request $request)
    {

    }
}
