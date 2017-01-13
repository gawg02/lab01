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
        class Student {
            function __construct() {
                $this->surname = '';
                $this->first_name = '';
                $this->emails = array();
                $this->grades = array();
            }
            function add_email($which,$address){
                $this->emails[$witch] = $address;
            }
            function add_grade($grade){
                $this->grades[] = $grade;
            }
            function average(){
                $total = 0;
                foreach($this->grades as $value)
                    $total += $value;
                return $total / count($this->grades);
            }
            function toString(){
                $result = $this->first_name . '' . $this->surname;
                $result .= ' ( ' . $this->average() . ")\n";
                foreach($this->emails as $which=>$what)
                    $result .= $wich . ': ' . $what . "\n";
                $result.="\n";
                return '<pre>' . $result . '<\pre>';
            }
        }
        ?>
    </body>
</html>
