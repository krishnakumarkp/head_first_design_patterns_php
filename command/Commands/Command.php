<?php
namespace Commands;

interface Command
{
    public function execute();
    public function undo();
    public function redo();
}