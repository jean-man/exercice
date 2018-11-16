<?php


namespace MyApp;


class Student extends Person
{
    /** @var @array $grades */
    private $grades;

    /**
     * @return mixed
     */
    public function getGrades()
    {
        return $this->grades;
    }

    /**
     * @param mixed $grades
     * @return Student
     */
    public function setGrades(array $grades)
    {
        $this->grades = $grades;
        return $this;
    }

    public function addGrade(float $grade): Student
    {
        $this->grades [] = $grade;
        return $this;
    }


public function average(): float
{
    return array_sum($this->grades) / count($this->grades);
}

public function getFullname(): string
{

    return "Etudiant : " . parent::getFullName();
}


}