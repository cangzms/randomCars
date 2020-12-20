<?php
namespace RandomCars;

class RandomCars{
    public function cars(){
        //datalisti listeleme
        $cars=file_get_contents(__DIR__ . "/../inc/cars.json");
        //JSON dökümanını php dizisine çevirme
        $cars=json_decode($cars,true);
        //rasgele index numarası oluşturma
        $index=mt_rand(0,count($cars));
        //rasgele araç dizisi döndürme
        return $cars[$index];
    }

    public function getCars(){
        return $this->cars();
    }
}
