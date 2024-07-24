<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Exception;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);

            $contact = Contact::create($validatedData);

            Mail::to('bellodenis53@gmail.com')->send(new ContactFormMail($contact));

            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while sending your message. Please try again later.')->withInput();
        }
    }
}
