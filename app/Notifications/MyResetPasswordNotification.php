<?php

namespace App\Notifications;


use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;


class MyResetPasswordNotification extends ResetPassword
{
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Você está recebendo essa mensagem, porque uma requisição de redefinição de senha foi chamada....')
                    ->action('Resete sua senha', url(config('app.url').route('password.reset', $this->token, false)))
                    ->line('Obrigado por usar nossa aplicação!');
    }
}
