<?php
namespace Interviewers;

class QAEngineer implements Interviewer {
    public function askQuestions()
    {
        echo "Asking about automated testing! \n";
    }
}