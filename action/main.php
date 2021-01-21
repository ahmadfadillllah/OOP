<?php

class main
{
    private $rating;
    private $klasifikasi;

    public function setRating($rating){
        if($rating == 1){
            $this->rating = 0;
        }else if($rating == 2){
            $this->rating = 0.25;
        }else if($rating == 3){
            $this->rating = 0.5;
        }else if($rating == 4){
            $this->rating = 0.75;
        }else if($rating == 5){
            $this->rating = 1;
        }else{
            echo "Tidak ditemukan";
        }
    }

    public function getRating() {
        return $this->rating;
    }

    public function setKlasifikasi($klasifikasi){
        if($klasifikasi == 1){
            $this->klasifikasi = 0;
        }else if($klasifikasi == 2){
            $this->klasifikasi = 0.25;
        }else if($klasifikasi == 3){
            $this->klasifikasi = 0.5;
        }else if($klasifikasi == 4){
            $this->klasifikasi = 0.75;
        }else if($klasifikasi == 5){
            $this->klasifikasi = 1;
        }else{
            echo "Tidak ditemukan";
        }
    }

    public function getKlasifikasi() {
        return $this->klasifikasi;
    }
}