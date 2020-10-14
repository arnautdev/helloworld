<?php


namespace App;


use App\includes\BaseFunctions;

class HelloWorldApp
{
    /**
     * @var BaseFunctions
     */
    private $settings;

    /**
     * HelloWorldApp constructor.
     */
    public function __construct()
    {
        $this->settings = new BaseFunctions();
    }

    /**
     * Get settings object
     * @return BaseFunctions
     */
    public function getSettings()
    {
        return $this->settings;
    }
}