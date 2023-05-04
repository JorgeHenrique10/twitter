<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifiedOrganizationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = auth()->user();

        $user->createOrGetStripeCustomer();

        if ($user->subscribed('verified_org')) {
            return $user->redirectToBillingPortal();
        }

        return $user->newSubscription('verified_org', 'price_1N49tnG8yIRSD1QKeaXj6YFF')
            ->checkout()
            ->redirect();
    }
}
