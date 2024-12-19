<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriberRequest;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    private function validateData(SubscriberRequest $request)
    {
        $validatedData = $request->validated();

        Subscriber::create($validatedData);
    }

    public function store(SubscriberRequest $request)
    {
        $this->validateData($request);

        return back()->with('status', "Subscribed successfully");
    }

    public function store_footer(SubscriberRequest $request)
    {
        $this->validateData($request);

        return back()->with('status_footer', "Subscribed successfully");
    }
}
