<?php
require_once __DIR__."./classes/Cinema.php";
require_once __DIR__."./classes/Movie.php";
require_once __DIR__."./classes/Room.php";
require_once __DIR__."./classes/SpecialRoom.php";
require_once __DIR__."./classes/Show.php";
require_once __DIR__."./classes/Actor.php";

$actors=[
    new Actor("Keanu","Reeves"),
    new Actor("Robert","Downey Jr."),
    new Actor("Paolino","Paperino"),
    new Actor("Pippo","Pippo"),
    new Actor("Pluto","Pluto")
];

$films=[
    new Movie("John Wick I", "azione","2:00", [$actors[0],$actors[2],$actors[3],$actors[4]]),    
    new Movie("John Wick II", "azione","2:00", [$actors[0],$actors[2],$actors[3],$actors[4]]),
    new Movie("John Wick III", "azione","2:00", [$actors[0],$actors[2],$actors[3],$actors[4]]),
    new Movie("Iron Man I","azione","3:00",[$actors[1],$actors[2],$actors[3],$actors[4]]),    
    new Movie("Iron Man II","azione","3:00",[$actors[1],$actors[2],$actors[3],$actors[4]]),    
    new Movie("Iron Man III","azione","3:00",[$actors[1],$actors[2],$actors[3],$actors[4]])
];

$shows=[
    new Show($films[0],"28/02/2022","18:30"),
    new Show($films[1],"28/02/2022","21:00"),
    new Show($films[2],"28/02/2022","23:30"),
    new Show($films[3],"28/02/2022","18:30"),
    new Show($films[4],"28/02/2022","21:00"),
    new Show($films[5],"28/02/2022","23:30"),
    new Show($films[0],"01/03/2022","18:30"),
    new Show($films[1],"01/03/2022","21:00"),
    new Show($films[2],"01/03/2022","23:30"),
    new Show($films[3],"01/03/2022","18:30"),
    new Show($films[4],"01/03/2022","21:00"),
    new Show($films[5],"01/03/2022","23:30")           
];

$rooms=[
    new Room("A","80",[$shows[0],$shows[1],$shows[2],$shows[6],$shows[7],$shows[8]]),
    new SpecialRoom("B","150",[$shows[3],$shows[4],$shows[5],$shows[9],$shows[10],$shows[11]],true,true,true)
];

$cinema= new Cinema("Cinema Italia","Via Italia 1","3333333333",$rooms);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // rooms info
        $sum=0;
        foreach ($rooms as $room){
            if (get_class($room) == "Room"){    
                echo "Sala: "."{$room -> getRoomName()}"."<br>Capienza: "."{$room->getRoomCapacity()}"."<br><br>";
            }
            if (get_class($room) == "SpecialRoom"){
                echo "Sala: "."{$room -> getRoomName()}"."<br>Capienza: "."{$room->getRoomCapacity()}"."<br>";
                echo "Sala con effetti: "."{$room->getSmokeInfo()}"." ,";
                echo "{$room->getWaterInfo()}"." ,";
                echo "{$room->getVibrInfo()}"."<br><br>";
            }
            $sum += $room -> getRoomCapacity();
        }
        echo "Capienza totale del cinema:".$sum;
        echo "<br><br>";
        // shows info
        $searchedDate = "01/03/2022";
        $searchedFilm = "Iron Man I";
        $instances=0;
        $showsEnd=[];
        foreach ($shows as $movie){
            //show's end in array
            array_push($showsEnd,$movie->getShowEnd());
            // count for instances of shows of searched movie on searched date
            if ($movie->searchFilm($searchedFilm,$searchedDate)){
                $instances += 1;
            }
        }
        echo "Ci sono ".$instances." proiezioni programmate del film ".$searchedFilm." in data ".$searchedDate;
        echo "<br><br>";
        echo "Orario di fine dell'ultima proiezione: ".max($showsEnd);
    ?>
</body>
</html>
