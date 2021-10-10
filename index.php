<?php
require_once 'Cars.php';
require_once 'Bicycle.php';


$bike = new Bicycle("yellow",2);
$bike->currentSpeed = 10;
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();




$flandersGeo = new Cars("bleue", 4,'essence');
$flandersGeo->currentSpeed = 60;
$flandersGeo->color = "bleue";
$flandersGeo->nbSeat = 4;
$flandersGeo->energy ="essence";
echo '<br><br><br>';
echo '<br> La voiture de Flander est '.$flandersGeo->color.' à ' .$flandersGeo->nbSeat. ' places et roule à l\''.$flandersGeo->energy.'.<br>';
echo $flandersGeo->start();
echo $flandersGeo->forward();
echo '<br> Vitesse du véhicule est de ' . $flandersGeo->currentSpeed . ' km/h' . '<br>';
echo $flandersGeo->brake();
echo '<br> Vitesse de la voiture : ' . $flandersGeo->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
