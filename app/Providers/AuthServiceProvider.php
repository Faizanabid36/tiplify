<?php

namespace App\Providers;

use App\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        VerifyEmail::toMailUsing(function (User $user, string $verificationUrl) {
            return (new MailMessage)
                ->subject(Lang::get('E-Mail-Address Verification'))
                ->line('Hello ' . ucfirst($user->name))
                ->line('Please click on the button or link to confirm your email address.')
                ->action('E-Mail-Address Verification', $verificationUrl)
                ->line('If you haven\'t created an account, no further action is required.');
        });

        ResetPassword::toMailUsing(function (User $user, string $url) {
            $link = url(route('password.reset', $url));
            return (new MailMessage)
                ->subject('Reset Password')
                ->line("You are receiving this email because we have received a request to reset the password for your corona guest form account.")
                ->action('Reset Password', $link)
                ->line('If you haven\'t created an account, no further action is required.');
        });

        $this->registerPolicies();
    }
}
