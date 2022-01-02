<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use App\Models\User;
use Illuminate\Http\Request;
use Mail;
use App\Mail\Checkout\Paid;

class CheckoutController extends Controller
{
    public function update(Request $request, Checkout $checkout, User $user)
    {
        $checkout->is_paid = true;
        $checkout->save();

        // send email to user
        Mail::to($checkout->User->email)->send(new Paid($checkout));

        $request->session()->flash('success', "checkout dengan ID {$checkout->id} telah diperbarui!");
        return redirect(route('admin.dashboard'));
    }
}
