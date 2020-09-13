<?php


class EmailNotifier implements INotifier
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
            $notification_info = "[EmailNotifier][SUCCESS] {$message} sent to {$receiver->getName()}, email {$receiver->getEmail()}";
            Log::info($notification_info);
            echo $notification_info;
        }
        catch (Exception $exception){
            $notification_error = "[EmailNotifier][ERROR] {$exception->getMessage()}";
            Log::error($notification_error);
            echo $notification_error;
        }
    }
}