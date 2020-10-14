<?php

class Student  
{
    public $id;
    public $name;

    public function __construct(int $id, string $name) {
        $this->id = $id;
        $this->name = $name;
    }
}

$students = [
    new Student(101, "Ahmad Fasehan"),
    new Student(102, "Andris Firmansyah")
];

foreach ($students as $student ) {
    echo $student->name . "\n";
}
