<?php

class Groups
{
    protected string $groupName;
    protected array $listStudents = [];

    public function __construct(string $groupName)
    {
        $this->groupName = $groupName;
    }

    public function getGroupName():string
    {
        return "<br>L'équipe des : <b>" . $this->groupName . "</b>";
    }

    public function addStudent(Students $student) : void
    {
        $this->listStudents[] = $student;
    }

    public function getStudentsList():array
    {
        $studentsList = [];
        foreach ($this->listStudents as $student) {
            $studentsList[] = [
                'name' => $student->getStudentName(),
                'score' => $student->getStudentScore()
            ];
        }
        return $studentsList;
    }
}