<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class UserSubscriptionsController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::all();

        dd($subscriptions);
    }
}
