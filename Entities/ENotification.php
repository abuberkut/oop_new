<?php


class ENotification
{
    /**
     * @var EClient
     */
    private $receiver;

    /**
     * @var string
     */
    private $message;

    /**
     * ENotification constructor.
     * @param $receiver
     * @param $message
     */
    public function __construct(EClient $receiver, string $message){
        $this->receiver = $receiver;
        $this->message = $message;
    }

    /**
     * @return EClient
     */
    public function getReceiver(): EClient
    {
        return $this->receiver;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}