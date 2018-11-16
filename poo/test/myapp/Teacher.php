<?php

namespace MyApp;


class Teacher extends Person
{

    /** @var array $subjects */
    private $subjects;

    /**
     * @return array
     */
    public function getSubjects(): array
    {
        return $this->subjects;
    }

    /**
     * @param array $subjects
     * @return Teacher
     */
    public function setSubjects(array $subjects): Teacher
    {
        $this->subjects = $subjects;
        return $this;
    }

    public function addSubject(Subject $subject): Teacher
    {
        $this->subjects[] = $subject;
        return $this;
    }
}