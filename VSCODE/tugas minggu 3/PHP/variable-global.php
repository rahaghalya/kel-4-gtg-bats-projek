<?php
$x=75; // Variabel global
$y=100; // Variabel global

function addition() {
  // Mengakses variabel global menggunakan $GLOBALS
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
?>