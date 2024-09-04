<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactAdminMail;
use App\Mail\ContactUserMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save to the database
        $contact = Contact::create($validated);

        // Send email to admin
        Mail::to('ulomijay160@gmail.com')->send(new ContactAdminMail($validated));

        // Send confirmation email to the user
        Mail::to($validated['email'])->send(new ContactUserMail($validated));

        return back()->with('success', 'Your message has been sent. Thank you!');
    }
}
