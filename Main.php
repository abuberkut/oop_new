<?php


class Main
{
    public function execute(){
        try {
            //TODO: create CRUD interface for user

            $client = new EClient('Abubakr','a@m.com', '902010611');
            // (new CreateClient)->perform($client);

            $product = new EProduct('Asus ROG',17000, Currencies::TJS, ProductStatus::SOLD);
            // (new CreateProduct)->perform($client);

            $order = new EOrder($client, $product);
            // (new CreateProduct)->perform($client);

            $notification = new ENotification($client, "Order id = {$order->getId()}");

            // TODO: User can select notification type

            $notifier_type = NotificationType::SMS;

            $notifier = (new NotifierFactory)->create($notifier_type);

            $notifier->send($notification);
        }
        catch (Exception $exception) {
            $error = "[Main][ERROR] {$exception->getMessage()}";
            Log::error($error);
            echo $error;
        }
    }
}