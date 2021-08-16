<?php


class Person extends Job
{
    private $job;

    function Person()
    {
        $this->job = new job();
        $this->job->setSalary(10000);
        
    }
    function getSalary() {
        $this->job->getSalary();
    }

}
