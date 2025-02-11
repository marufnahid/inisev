<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\Web;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    //

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'web_id' => 'required|exists:webs,id',
        ]);

//        dd($request->input('email'));
        $subscription = new Subscription();
         $subscription->email = $request->input('email');
         $subscription->web_id = $request->input('web_id');
        $subscription->save();
        return response()->json("Subscriber added to the project. email is " . $request->email , 201);
    }
}
