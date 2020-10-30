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
                ->subject(Lang::get('E-Mail-Adresse bestätigen'))
                ->line('Hallo ' . ucfirst($user->name))
                ->line('Bitte klick auf den Button oder Link, um deine E-Mail-Adresse zu bestätigen.')
                ->action('E-Mail-Adresse bestätigen', $verificationUrl)
                ->line('Wenn du kein Konto erstellt hast, ist keine weitere Aktion erforderlich.');
        });

        ResetPassword::toMailUsing(function (User $user, string $url) {
            $link = url(route('password.reset', $url));
            return (new MailMessage)
                ->subject('Passwort Zurücksetzen')
                ->line("Du erhältst diese E-Mail, weil wir eine Anfrage zum Zurücksetzen des Passworts für dein tplify-Konto erhalten haben.")
                ->action('Passwort Zurücksetzen', $link)
                ->line('Wenn du keine Passwortzurücksetzung beantragt hast, ist keine weitere Aktion erforderlich.');
        });

        $this->registerPolicies();

        //
    }
}
