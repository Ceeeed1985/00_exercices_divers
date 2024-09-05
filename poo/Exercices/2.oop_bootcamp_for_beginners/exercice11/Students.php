<?php

class Students
{

    protected string $student;
    protected float $score;

    public function __construct(string $student, float $score)
    {
        $this->student = $student;
        $this->score = $score;
    }

    public function getStudentName():string
    {
        return $this->student;
    }
    public function getStudentScore():float
    {
        return $this->score;
    }

}