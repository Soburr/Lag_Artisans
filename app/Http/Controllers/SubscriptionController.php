<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriptionRequest;
use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function subscribe(SubscriptionRequest $request) {
        Subscription::create($request->validated());

        return response()->json(["message" => "You've successfully subscribed to our newsletter!"]);
    }
}
