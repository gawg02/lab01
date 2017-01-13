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
        # class containing all student creation information
        class Student {
            function __construct() {
                $this->surname = '';
                $this->first_name = '';
                $this->emails = array();
                $this->grades = array();
            }
            
            #adds the ability to add an email using
            #which email eg. work,school,home and
            #the address its self eg. example@example.ca
            function add_email($which ,$address){
                $this->emails[$which] = $address;
            }
            
            #adds the ability to add a grade
            #a grade is just a number
            function add_grade($grade){
                $this->grades[] = $grade;
            }
            
            #averages all of the grades using
            #the values of the grade divided by
            # the number of grades on the students file
            function average(){
                $total = 0;
                foreach($this->grades as $value)
                    $total += $value;
                return $total / count($this->grades);
            }
            
            #prints off the students information
            #students name students average
            #students emails
            function toString(){
                $result = $this->first_name . '' . $this->surname;
                $result .= ' ( ' . $this->average() . ")\n";
                foreach($this->emails as $which=>$what)
                    $result .= $which . ': ' . $what . "\n";
                $result .="\n";
                return '<pre>' . $result . '<\pre>';
            }
        }
        ?>
    </body>
</html>
