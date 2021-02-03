<?php

require_once("main.php");

class testulis extends main
{
    private $testulis;

    public function setTesTulis($testulis)
    {
        if ($testulis > 85) {
            $this->setRating(5);
        } else if ($testulis >= 70 && $testulis <= 85) {
            $this->setRating(4);
        } else if ($testulis >= 60 && $testulis <= 69) {
            $this->setRating(3);
        } else if ($testulis >= 50 && $testulis <= 59) {
            $this->setRating(2);
        } else {
            $this->setRating(1);
        }
        $this->testulis = $testulis;
    }

    public function getTesTulis() {
        return $this->testulis;
    }
}