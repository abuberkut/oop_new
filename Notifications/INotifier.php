<?php


interface INotifier
{
    /**
     * @param ENotification $notification
     * @return mixed
     */
    public function send(ENotification $notification);
}