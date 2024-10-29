<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriptionRequest;
use App\Mail\NewSubscriber;
use Illuminate\Http\Request;
use App\Models\Subscription;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{
    public function subscribe(SubscriptionRequest $request) {
        $email = $request->input('email');
        $validatedData = $request->validate([
            'email' => 'required|email|unique:subscriptions,email'
        ]);

        $email = $validatedData['email'];

        $subscriber = new Subscription();
        $subscriber->email = $email;
        $subscriber->save();

        Mail::to($email)->send(new NewSubscriber());

        return redirect()->back()->with('success', 'You have successfully subscribed to our news channel, cheers mate!');
    }
}
