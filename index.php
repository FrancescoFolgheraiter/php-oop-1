<?php
//classe movie
class Movie {
    //variabili d'istanza
    public $title;
    public $genre;
    public $yearReleas;
    public $cover;
    public $originalLanguage;
    //funzione costruttore da implementare
    function __construct($_title, $_genre =[], $_yearReleas = null, $_cover = null, $_originalLanguage = null) 
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->yearReleas = $_yearReleas;
        $this->cover = $_cover;
        $this->originalLanguage = $_originalLanguage;
    }
    public function getTitleYear(){
        return $this->title.' '.$this->yearReleas;
    }
}
$film1 = new Movie('Oppenheimer','documentary','2023');
var_dump($film1);
$film2 = new Movie('Lei',['dystopian',"comedy"],'2013');
var_dump($film2);
var_dump($film2->getTitleYear())
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php object oriented programming</title>
        <!--boostrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <h1 class="text-center">
            Php Object oriented
        </h1>
    </body>
</html>