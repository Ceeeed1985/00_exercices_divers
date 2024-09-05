<?php

class Groups
{
    protected string $groupName;
    protected array $listStudents = [];

    public function __construct(string $groupName)
    {
        $this->groupName = $groupName;
    }

    //Obtenir le nom du groupe
    public function getGroupName():string
    {
        return "<br>L'équipe des : <b>" . $this->groupName . "</b>";
    }

    //Ajouter un étudiant dans un groupe
    public function addStudent(Students $student) : void
    {
        $this->listStudents[] = $student;
    }

    //Récupérer la liste des étudiants qui se situent dans chaque groupe
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

    //Calculer le nombre d'étudiants dans un groupe

    public function getCountStudent(): int
    {
        return count($this->listStudents);
    }
    
    //Faire la somme des scores de chaque groupe

    public function countTotalScore():float
    {
        $totalScore = 0;
        foreach ($this->listStudents as $student) {
            $totalScore += $student->getStudentScore();
        }
        return $totalScore;
    }

    //Calculer la moyenne par groupe

    public function getAverageGroup() : float
    {
        $totalScore = $this->countTotalScore();
        $countStudent = $this->getCountStudent();
        if ($countStudent > 0){
            $averageGroup = $totalScore / $countStudent;
        } else {
            $averageGroup = 0;
        }
        return $averageGroup;

    }

    //Afficher les moyennes

}