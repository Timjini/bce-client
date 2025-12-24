<?php

namespace App\Listeners;

use App\Events\ContactInitiated;
use App\Services\PHPCustomMailer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendAdminNotification
{
    /**
     * Create the event listener.
     */
        public function __construct(
        public PHPCustomMailer $emailService,
    )
    {
        $this->emailService = $emailService;
    }

    /**
     * Handle the event.
     */
    public function handle(ContactInitiated $event): void
    {
        info("-----> EVENT ADMIN" . json_encode($event));
        // $htmlContent = view('emails.contact-thankyou')->with('contactData', $event)->render();
        // $emailService = $this->emailService->sendEmail($event['email'], $htmlContent);
    }
}
