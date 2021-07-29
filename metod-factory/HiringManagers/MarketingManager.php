<?php
namespace HiringManagers;

use Interviewers\Interviewer;
use Interviewers\MarketingExecutive;

class MarketingManager extends HiringManager
{
    protected function getInterviewer(): Interviewer
    {
        return new MarketingExecutive();
    }
}