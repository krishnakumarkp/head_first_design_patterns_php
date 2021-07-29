<?php
namespace HiringManagers;

use Interviewers\Interviewer;
use Interviewers\Developer;

class DevelopmentManager extends HiringManager
{
    protected function getInterviewer(): Interviewer
    {
        return new Developer();
    }
}