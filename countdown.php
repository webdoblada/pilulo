<?php
    $deadline = date_create("28 February 2031");
    $now = date_create();

    $diff = date_diff($now, $deadline);

    $yearsleft = $diff->format("%y");
    $monthsleft = $diff->format("%m");
    $daysleft = $diff->format("%d");
    $hoursleft = $diff->format("%h");
    $minutesleft = $diff->format("%i");
    $secondsleft = $diff->format("%s");

    echo $yearsleft . " " . $monthsleft . " " . $daysleft . " " . $hoursleft . " " . $minutesleft . " " . $secondsleft;


    /*$deadline = strtotime("28 February 2031");

    //$deadline = strtotime("tomorrow");
    $now = time();

    $timeleft = $deadline - $now;

    $hoursleft = floor($timeleft / 3600);

    // Obtener minutos restantes
    $remaining = $timeleft % 3600;
    $minutesleft = floor($remaining / 60);

    // Obtener segundos restantes
    $secondsleft = $remaining % 60;

    echo $hoursleft . " " . $minutesleft . " " . $secondsleft . " ";

    if($hoursleft == 0 && $minutesleft == 0 && $secondsleft == 0) {
        $alphabet = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
                
        $random_number=rand(0,sizeof($alphabet));

        $letra = $alphabet[$random_number];

        file_put_contents('letra.json', json_encode($letra));

        echo "cambio";

        echo " " . $letra;
    } */
?>