<?php


class SMSNotifier implements INotifier
{

    /**
     * @param ENotification $notification
     * @return mixed|void
     */
    public function send(ENotification $notification)
    {
        $message = $notification->getMessage();
        $receiver = $notification->getReceiver();

        try {
            echo "[SMSNotifier][SUCCESS] {$message} sent to {$receiver->getName()}, phone {$receiver->getPhone()}";
            //todo logging
        }
        catch (Exception $exception){
            echo "[SMSNotifier][ERROR] {$exception->getMessage()}";
            //todo logging
        }
    }
}