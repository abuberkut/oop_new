<?php


class NotifierFactory
{
    /**
     * @param string $type
     * @return EmailNotifier|SMSNotifier
     * @throws Exception
     */
    public function create(string $type) {
        switch ($type) {
            case NotificationType::EMAIL:
                return new EmailNotifier();
            case NotificationType::SMS:
                return new SMSNotifier();
            default:
                throw new Exception("Wrong notification type {$type}.");
        }
    }
}