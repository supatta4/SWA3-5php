<?php
    class TestPerson extends Person{
        private  $obj2;
        function TestPerson(){
            $this->obj2 = new Person();
            $this->obj2->Person(); 
            echo $this->obj2->getSalary();
        }
    }
    $obj3 = new TestPerson();
    $obj3->TestPerson();