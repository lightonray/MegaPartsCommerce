<?php

namespace App\Console\Commands;

use App\Mail\BulkEmail;
use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Exception\TransportException;

class SendBulkEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send-bulk';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send emails to all users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::all();

        if ($users->count() === 0) {
            $this->info('No users to send emails to.');
            return;
        }

       
        $subject = $this->ask('Enter the email subject:');
        $body = $this->ask('Enter the email body:');
        
        foreach ($users as $user) {
            try {
                // Attempt to send the email
                Mail::to($user->email)->send(new BulkEmail($subject, $body));
            } catch (TransportException $e) {
                // Handle the exception, log it, and display an error message
                // Log::error($e->getMessage());
                $this->error('An error occurred while sending the email: ' . $e->getMessage());
            }
        }

        
    }
}
