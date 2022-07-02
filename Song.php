<?php

if(!empty($_POST['nbBolee'])){
    $mySong = new Song($_POST['nbBolee']);
    $mySong->singMeThatSong();
}



class Song{
    public int $nbBolee;

    function __construct(int $number)
    {
        $this->nbBolee = $number;
    }

    private function getSongPartOne(){
        return "<p>" . $this->nbBolee . " bolées de cidre sur le mur, " . $this->nbBolee . " bolées sans alcool.</p>";
    }
    
    private function getSongPartTwo(){
        return "<p>Bois en un et au suivant ! " . $this->nbBolee . " bolées de cidre sur le mur.</p>";

    }

    private function getCouplet($data = null){
        $partOne = $this->getSongPartOne();
        $partTwo = $this->getSongPartTwo();
        include('index.php');
    }

    public function singMeThatSong(){
        return $this->getCouplet($data[])
    }




}