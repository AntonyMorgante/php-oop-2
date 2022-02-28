<?php
require_once __DIR__."./classes/Cinema.php";
require_once __DIR__."./classes/Movie.php";
require_once __DIR__."./classes/Room.php";
require_once __DIR__."./classes/SpecialRoom.php";
require_once __DIR__."./classes/Show.php";

$films=[
    new Movie("John Wick I", "azione", ["Keanu Reeves","Pippo","Pluto","Paperino"]),    
    new Movie("John Wick II", "azione", ["Keanu Reeves","Pippo","Pluto","Paperino"]),
    new Movie("John Wick III", "azione", ["Keanu Reeves","Pippo","Pluto","Paperino"]),
    new Movie("Iron Man I","azione",["Robert Downey Jr.","Topolino","Paperone","Gambadilegno"]),    
    new Movie("Iron Man II","azione",["Robert Downey Jr.","Topolino","Paperone","Gambadilegno"]),    
    new Movie("Iron Man III","azione",["Robert Downey Jr.","Topolino","Paperone","Gambadilegno"])
];

$shows=[
    new Show($films[0],"28/02/2022","18:30"),
    new Show($films[1],"28/02/2022","21:00"),
    new Show($films[2],"28/02/2022","23:30"),
    new Show($films[3],"28/02/2022","18:30"),
    new Show($films[4],"28/02/2022","21:00"),
    new Show($films[5],"28/02/2022","23:30")        
];

$rooms=[
    new Room("A","80",[$shows[0],$shows[1],$shows[2]]),
    new SpecialRoom("B","150",[$shows[3],$shows[4],$shows[5]],true,true,true)
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
        var_dump($cinema);
    ?>
</body>
</html>