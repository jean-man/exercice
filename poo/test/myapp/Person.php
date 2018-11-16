<?php

namespace MyApp;

use DateTime;


class Person {

    const DATE_FR = "d/m/Y";
    const DATE_US = "m-d-Y";

    /** @var string $firstname */
    private $firstname;
    /** @var string $lastname */
    private $lastname;
    /** @var DateTime $birthdate */
    private $birthdate;

    public function __construct(string $firstname, string $lastname, DateTime $birthdate = null)
    {
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
        if ($birthdate != null) {
            $this->setBirthdate($birthdate);
        }
    }

    public function getFullname(): string {
        return $this->firstname . " " . $this->getLastname();
    }

    public function getAge(): int {
        $today = new DateTime();
        $diff = $today->diff($this->birthdate);
        return $diff->y;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return trim($this->firstname);
    }

    /**
     * @param string $firstname
     * @return Person
     */
    public function setFirstname(string $firstname): Person
    {
        $this->firstname = ucfirst($firstname);
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return Person
     */
    public function setLastname(string $lastname): Person
    {
        $this->lastname = ucfirst($lastname);
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getBirthdate(): DateTime
    {
        return $this->birthdate;
    }

    public function getFormatedBirthdate(string $format = self::DATE_US): string
    {
        return $this->getBirthdate()->format($format);
    }

    /**
     * @param DateTime $birthdate
     * @return Person
     */
    public function setBirthdate(DateTime $birthdate): Person
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    public static function parler(): string
    {
        return "Bonjour " . self::DATE_FR;
    }

}