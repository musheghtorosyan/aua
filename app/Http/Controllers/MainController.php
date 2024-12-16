<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\Test;

class MainController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function test(){
        return view('test');
    }

    public function start(Request $request){
        if($request->test == 1){
            $questions = Question::where('id','<',10)->get();
        } else if($request->test == 2){
            $questions = Question::where('id','<',10)->get();
        } if($request->test == 3){
            $questions = Question::where('id','<',10)->get();
        }
        
        $email = $request->email;
        $phone = $request->phone;
        return view('start', compact('questions','email','phone'));
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



    public function saveResult(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required',
            'phone' => 'nullable|string',
            'score' => 'required|numeric|min:0|max:100',
        ]);

        $result = Test::create([
            'test' => "SAT Verbal TEST", // Generate a unique test ID
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'score' => $validatedData['score'],
        ]);

        return response()->json(['message' => 'Result saved successfully!', 'result' => $result], 200);
    }
}
