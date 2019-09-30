<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>prova</title>
</head>

<body>
    <?php
     //________________________________________________________________________________________________________________________-
     $nomi=array("marco","luca");
     foreach ($nomi as $valore) {
         echo $valore."<br />";
     }
    $colori = array('bianco',"rosso","ciao" );
    foreach ($colori as $colore) {
        $colore=strtoupper($colore); // non modifico il valore dell'array
        echo $colore ,"<br>";
    }
    foreach ($colori as $colore) {
        echo $colore ,"<br>";
    }
    foreach ($colori as &$colore) {//cambia il contenuto dell'array con &
        $colore=strtoupper($colore); 
        echo $colore ,"<br>";
    }
    unset($colore);//cancella la variabile

    foreach ($colori as $colore) {
        echo $colore ,"<br>";
    }
    foreach ($colori as $key => $valore) {
        echo $key ,"<br>", $valore, "<br>";
    }
    //________________________________________________________________________________________________________________________-
     $film = array('titolo' => 'Via col Vento', 'anno' => 1939,'regista' => 'Victor Fleming');
    foreach ($film as $info => $valore) {
        echo "$info: $valore <br>\n"; 
    }




     //________________________________________________________________________________________________________________________- 
    
    ?>

</body>

</html>