<?php


namespace App\includes;


class BaseFunctions
{

    /**
     * @var
     */
    private $steps = [];


    /**
     * Add new steps
     * @param array $steps
     * @return $this
     */
    public function addSteps(array $steps)
    {
        if (!empty($this->steps)) {
            $this->steps = array_merge($this->steps, $steps);
        } else {
            $this->steps = $steps;
        }


        return $this;
    }

    /**
     * Get current step
     * @param null $key
     * @return mixed|null
     */
    public function getCurrentStep($key = null)
    {
        if (isset($this->steps[$key])) {
            return $this->steps[$key];
        }

        return null;
    }

    /**
     * Get all steps
     * @return array
     */
    public function getAllSteps()
    {
        return $this->steps;
    }
}