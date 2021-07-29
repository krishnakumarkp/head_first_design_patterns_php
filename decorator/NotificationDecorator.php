<?php
abstract class NotificationDecorator implements Notification
{
    protected Notification $notifier;
    public function __construct(Notification $notifier)
    {
        $this->notifier = $notifier;
    }
    public function notify(string $data)
    {
        $this->notifier->notify($data);
    }
}