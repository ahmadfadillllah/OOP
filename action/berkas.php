<?php

require_once("main.php");

class berkas extends main
{
    private $berkas;

    public function setBerkas($berkas)
    {
        if ($berkas > 85) {
            $this->setRating(5);
        } else if ($berkas >= 70 && $berkas <= 85) {
            $this->setRating(4);
        } else if ($berkas >= 60 && $berkas <= 69) {
            $this->setRating(3);
        } else if ($berkas >= 50 && $berkas <= 59) {
            $this->setRating(2);
        } else {
            $this->setRating(1);
        }
        $this->berkas = $berkas;
    }

    public function getBerkas() {
        return $this->berkas;
    }
}