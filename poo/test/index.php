<?php

function myapp_autoloader($class_name)
{
    $class_name = str_replace("\\", "/", $class_name);
    require_once $class_name . ".php";
}

spl_autoload_register('myapp_autoloader');


use \MyApp\Person;
use \MyApp\Student;
use \MyApp\Teacher;
use \MyApp\Subject;


$pierre = new Teacher("Pierre", "Jehan", new DateTime("1989-06-29"));
$pierre->addSubject(new Subject("PHP"));
$pierre->addSubject(new Subject("SQL"));
echo $pierre->getAge();
echo $pierre->getFullname();
echo $pierre->getFormatedBirthdate(Person::DATE_FR);

?>

<ul>
    <?php foreach ($pierre->getSubjects() as $subject) : ?>

    <li> <?= $subject->getLabel(); ?></li>

<?php endforeach; ?>
</ul>

<?php

$john = new Person("John", "Doe");

echo Person::parler();

echo "<hr>";

$elodie = new Student("Elodie", "Dupont");
$elodie->addGrade(12.5);
$elodie->addGrade(14);

echo $elodie->average();
echo $elodie->getFullname();
