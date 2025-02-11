<?php

namespace App\Console\Commands;

use App\Mail\PostMailedNotification;
use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEmailToSubscriber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-email-to-subscriber';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email to subscriber';

    /**
     * Execute the console command.
     */

    public function handle()
    {
        $posts = Post::where('is_sent', false)->get();

        foreach ($posts as $post) {
            $subscribers = $post->web->subscriptions;
            foreach ($subscribers as $subscriber) {
                Mail::to($subscriber->email)->queue(new PostMailedNotification($post));
            }
            $post->update(['is_sent' => true]);
        }

        $this->info('Notifications  sent to the subscriber successfully!');
    }
}
