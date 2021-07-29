<?php
namespace HiringManagers;

use Interviewers\Interviewer;

abstract class HiringManager
{
    protected Interviewer $interviewer;
    abstract protected function getInterviewer(): Interviewer;

    public function takeInterview()
    {
        $this->interviewer = $this->getInterviewer();
        $this->interviewer->askQuestions();
    }
    
}