<?php

class Mail {

    private $from = "";
    private $to = "";
    private $subject = "";
    private $message = "";
    private $headers = "";

    public function __construct($to) {
        $this->to = $to;
        $this->headers  = "From: noreply@potzplitz.de\r\n";
        $this->headers .= "Reply-To: me@potzplitz.de\r\n";
        $this->headers .= "MIME-Version: 1.0\r\n";
        $this->headers .= "Content-type: text/html; charset=UTF-8\r\n";
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function send() {
        $success = mail(
            $this->to,
            $this->subject,
            $this->message,
            $this->headers,
            "-fnoreply@potzplitz.de"
        );
        return $success;
    }
}
