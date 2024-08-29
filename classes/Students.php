<?php

class Student
{
    public array $grades;

    function __set($name, $value)
    {
        $this->grades[$name] = $value;
    }

    function __get($name)
    {
        return $this->grades[$name];
    }
}
