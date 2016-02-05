<?php
function onErrorFunction()
{
    echo 'Enter correct value';
}

set_error_handler('onErrorFunction');
class Student

{
    public $name;
    public $results;

    function __construct($name, array $result)
    {
        echo '<br>Student '.$name.':';
        foreach ($result as $subject => $item) {
            echo '<br>'.$subject.':'.$item;
        }
        echo '<hr>';
    }
}

$student1 = new Student ('john',array('math'=>3, 'biology'=>4));
$student2 = new Student ('marry',array('math'=>4, 'biology'=>4));

$student3 = new Student ('mark',1);