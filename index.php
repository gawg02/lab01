<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include('Student.php');
        echo"hello my name is Greg this is lab 1 yay!!!!";
        
        $students = array();
        
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $studnets['j123'] = $first;
        
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $student['a456'] = $second;
        
        $third = new Student();
        $third->surname = "Little";
        $third->first_name = "Greg";
        $third->add_email('home', 'little@mail.com');
        $third->add_email('work1', 'glittle@workerbee.ca');
        $third->add_email('work2', 'gg@rona.com');
        $third->add_email('school', 'littleg@student.bcit.ca');
        $third->add_grade(88);
        $third->add_grade(42);
        $third->add_grade(79);
        
        ksort($student);
        foreach($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
