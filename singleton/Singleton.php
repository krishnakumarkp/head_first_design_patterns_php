<?php
class Singleton {
    protected static $instance;

    protected function __construct() { }

    final public static function getInstance() {
        if (!isset(static::$instance)) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public function __clone()/*: void*/ {

        trigger_error('Class singleton '.get_class($this).' cant be cloned.');
    }

    public function __wakeup(): void {

        trigger_error('Classe singleton '.get_class($this).' cant be serialized.');

    }

}