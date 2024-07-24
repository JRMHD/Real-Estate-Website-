<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryMail;
use Exception;
use Illuminate\Support\Facades\Log;

class EnquiryController extends Controller
{
    public function submit(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'project' => 'required|string|max:255',
            ]);

            $enquiry = Enquiry::create($validatedData);

            Mail::to('bellodenis53@gmail.com')->send(new EnquiryMail($enquiry));

            return redirect()->back()->with('success', 'Your enquiry has been sent successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            Log::error('Enquiry form error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while sending your enquiry. Please try again later.')->withInput();
        }
    }
}
