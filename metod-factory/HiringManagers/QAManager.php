<?php
namespace HiringManagers;

use Interviewers\Interviewer;
use Interviewers\QAEngineer;

class QAManager extends HiringManager
{
    protected function getInterviewer(): Interviewer
    {
        return new QAEngineer();
    }
}