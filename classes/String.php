<?php

class Strg
{
    public string  $string;
    public array $functions;



    function __construct($text)
    {
        $this->string = $text;
        $this->functions = [
            "up" => "strtoupper",
            "low" => "strtolower",
        ];
    }

    function __call($name, $arguments)
    {
        $functions = $this->functions[$name];
        return $functions($this->string) . $arguments[0];
    }
}
