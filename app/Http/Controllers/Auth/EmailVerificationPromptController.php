<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        // Reverse code in Ternary operation to active or deactive a email verification
        return $request->user()->hasVerifiedEmail()
                    ? view('auth.verify-email')
                    : redirect()->intended(route('dashboard'));
    }
}
