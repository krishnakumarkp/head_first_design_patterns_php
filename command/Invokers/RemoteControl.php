<?php
namespace Invokers;

use Commands\Command;

class RemoteControl
{
    private Command $onCommand;
    private Command $offCommand;
    private Command $undoCommand;
    private Command $redoCommand;

    public function __construct(Command $onCommand, Command $offCommand)
    {
        $this->onCommand = $onCommand;
        $this->offCommand = $offCommand;
    }

    public function pressOnButton()
    {
        $this->onCommand->execute();
        $this->undoCommand = $this->offCommand;
        $this->redoCommand = $this->onCommand;
    }

    public function pressOffButton()
    {
        $this->offCommand->execute();
        $this->undoCommand = $this->onCommand;
        $this->redoCommand = $this->offCommand;
    }
    public function pressUndoButton()
    {
        $this->undoCommand->execute();
    }
    public function pressRedoButton()
    {
        $this->redoCommand->execute();
    }


}