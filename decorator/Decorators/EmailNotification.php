<?php
namespace Decorators;

class EmailNotification extends \NotificationDecorator 
{
    public function notify(string $data)
    {
        echo "Send notification to email: " . $data . "\n";
        $this->notifier->notify($data);
    }
}