<?php
class DBNotification implements Notification
{
    public function notify(string $data) {
        echo "Send notification to database: " . $data . "\n";
    }
}