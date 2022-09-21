<?php

class Student
{
    public $name;
    public $grade;
}

function reviewStudentsGrade($studentsArray)
{
    $pass = 0;
    $noPass = 0;
    foreach ($studentsArray as $student) {
        $student->grade > 70 ? $pass += 1 : $noPass += 1;
    }

    exit("There are $pass students going to uni and $noPass going to repeat the year\n");
}

$student1 = new Student();
$student1->name = "Cesar";
$student1->grade = 65;

$student2 = new Student();
$student2->name = "Alan";
$student2->grade = 85;

$student3 = new Student();
$student3->name = "Laura";
$student3->grade = 95;

$student4 = new Student();
$student4->name = "Martha";
$student4->grade = 75;

reviewStudentsGrade([$student1, $student2, $student3, $student4]);

/* Generate how much students are going to uni, depending on the given students array */