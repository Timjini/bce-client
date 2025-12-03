<?php
namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormMail;
use App\Mail\ContactThankYouMail;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;



class ContactController extends Controller
{
    
        public function show()
    {
        return view('contact.show');
    }
    
    public function submit(Request $request): RedirectResponse
    {
        // Validate the request
        $data = $request->validate([
            'first-name' => 'required|string|max:255',
            'last-name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);
    
        // Save to DB
        $contact = Contact::create([
            'first_name' => $data['first-name'],
            'last_name' => $data['last-name'] ?? null,
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'company' => $data['company'] ?? null,
            'message' => $data['message'],
        ]);
    
        $flashMessage = 'Thank you for your message. We will get back to you shortly.';
    
        try {
            
            $adminEmail = env('MAIL_FROM_ADDRESS', 'info@devminds.cloud');
            Mail::to($adminEmail)->send(new ContactFormMail($data));
            Mail::to($data['email'])->send(new ContactThankYouMail($data));
             Storage::prepend('file.log', 'sent!');
        } catch (\Throwable $e) {
            Log::error('Contact form email failed: '.$e->getMessage());
             Storage::prepend('file.log', $e->getMessage());
            $flashMessage = 'Your message was saved, but the email could not be sent. We will contact you soon.';
        }
    
        return redirect()->back()->with('success', $flashMessage);
    }

}