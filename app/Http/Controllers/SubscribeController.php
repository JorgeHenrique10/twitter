<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();

        $user->createOrGetStripeCustomer();

        if ($user->subscribed('default')) {
            return $user->redirectToBillingPortal();
        }

        return $user->newSubscription('default', 'price_1N3JhIG8yIRSD1QKoNTBHu60')
            ->checkout()
            ->redirect();
    }
}
