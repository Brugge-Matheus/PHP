<?php
namespace class1;
class MyClass
{
    public function apresentation(): string
    {
        return "Testing class 1";
    }
}

namespace class2;
class MyClass
{
    public static function apresentation(): string
    {
        return "Testing class 2";
    }
}