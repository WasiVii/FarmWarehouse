<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        // Comment or Delete or Remove Comment this Code (code in comment) 
        // to remove or active send verification message at register and login account

        // if ($request->user()->hasVerifiedEmail()) {
        if ($request->user()) {
            return redirect()->intended(route('dashboard'));
        }

        // $request->user()->sendEmailVerificationNotification();
        // return back()->with('status', 'verification-link-sent');
    }
}
