<?php
namespace Interviewers;

class Developer implements Interviewer {
    public function askQuestions()
    {
        echo "Asking about design patterns! \n";
    }
}