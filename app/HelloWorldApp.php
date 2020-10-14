<?php


namespace App;


use App\includes\BaseFunctions;

class HelloWorldApp
{
    /**
     * @var BaseFunctions
     */
    public $settings;

    /**
     * HelloWorldApp constructor.
     */
    public function __construct()
    {
        $this->settings = new BaseFunctions();
    }
}