<?php
namespace App\Http\Controllers;

use App\Events\ContactInitiated;
use App\Http\Requests\SubmitFormRequest;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormMail;
use App\Mail\ContactThankYouMail;
use App\Models\Contact;
use App\Services\PHPCustomMailer;
use Illuminate\Http\RedirectResponse;


class ContactController extends Controller
{
        public function show()
    {
        
        return view('contact.show');
    }
    
    // public function submit(Request $request): RedirectResponse
    // {
    //     // Validate the request
    //     $data = $request->validate([
    //         'first-name' => 'required|string|max:255',
    //         'last-name' => 'nullable|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'phone' => 'nullable|string|max:20',
    //         'company' => 'nullable|string|max:255',
    //         'message' => 'required|string',
    //     ]);
    
    //     // Save to DB
    //     $contact = Contact::create([
    //         'first_name' => $data['first-name'],
    //         'last_name' => $data['last-name'] ?? null,
    //         'email' => $data['email'],
    //         'phone' => $data['phone'] ?? null,
    //         'company' => $data['company'] ?? null,
    //         'message' => $data['message'],
    //     ]);
    
    //     $flashMessage = 'Thank you for your message. We will get back to you shortly.';
    
    //     try {
    //         $adminEmail = env('MAIL_FROM_ADDRESS', 'info@devminds.cloud');
    //         Mail::to($adminEmail)->send(new ContactFormMail($data));
    //         Mail::to($data['email'])->send(new ContactThankYouMail($data));
    //     } catch (\Throwable $e) {
    //         Log::error('Contact form email failed: '.$e->getMessage());
    //         $flashMessage = 'Your message was saved, but the email could not be sent. We will contact you soon.';
    //     }
    
    //     return redirect()->back()->with('success', $flashMessage);
    // }

    public function submit(SubmitFormRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        Contact::create([
            'first_name' => $validated['first-name'],
            'last_name' => $validated['last-name'] ?? null,
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'company' => $validated['company'] ?? null,
            'message' => $validated['message'],
        ]);
    
        
        event(new ContactInitiated($validated));
        // On Success
        $flashMessage = 'Thank you for your message. We will get back to you shortly.';
        return redirect()->back()->with('success', $flashMessage);
    }

}