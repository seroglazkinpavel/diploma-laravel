<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FeedbackMailer extends Mailable
{
    use Queueable, SerializesModels;

    // Публичная переменная в которую запишем переданные данные формы из контроллера FeedbackController
    public $data;

    // Плучаем данные формы из контроллера FeedbackController
    public function __construct($feedback) {
        $this->data = $feedback;
    }

    // Создаем сообщение
    public function build() {
        // От кого письмо
//        return $this->from('noreply@aurora.com', 'ООО ТД АВРОРА')
            // Тема письма
        return $this->subject('Форма обратной связи')
            // Вызываем представление и передаем объект data с данными
            ->view('email.feedback', ['data' => $this->data]);
    }
//    /**
//     * Create a new message instance.
//     */
//    public function __construct()
//    {
//        //
//    }

//    /**
//     * Get the message envelope.
//     */
//    public function envelope(): Envelope
//    {
//        return new Envelope(
//            subject: 'Feedback Mailer',
//        );
//    }
//
//    /**
//     * Get the message content definition.
//     */
//    public function content(): Content
//    {
//        return new Content(
//            view: 'view.name',
//        );
//    }
//
//    /**
//     * Get the attachments for the message.
//     *
//     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
//     */
//    public function attachments(): array
//    {
//        return [];
//    }
}
