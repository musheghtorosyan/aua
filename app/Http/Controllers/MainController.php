<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function test(){

    }

    public function subscribe(Request $request){
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            echo 'Email is incorrect';
            return;
        }
        if (Subscription::where('email', $request->email)->exists()) {
            echo 'Email already exists';
            return;
        }
        Subscription::create(['email' => $request->email]);
        echo 'Subscription successful';
    }
}
