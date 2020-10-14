<?php


namespace App;


use App\includes\BaseFunctions;

class HelloWorldApp
{

    public function run()
    {
        $baseFunctions = new BaseFunctions();
        print($baseFunctions->test());
    }
}