<?php

class HelloWorld
{

    public $name;

    public $age = 0;

    public function returnString($name, $age = 0)
    {
        $this->name = $name;
        if ($age > 0) {
            $this->age = $age;
        }

        return sprintf('Hello %s, your age is %d', $this->name, $this->age);
    }
}
