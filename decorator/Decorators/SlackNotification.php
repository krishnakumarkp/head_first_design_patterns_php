<?php
namespace Decorators;

class SlackNotification extends \NotificationDecorator 
{
    public function notify(string $data)
    {
        echo "Send notification to slack: " . $data . "\n";
        $this->notifier->notify($data);
    }
}