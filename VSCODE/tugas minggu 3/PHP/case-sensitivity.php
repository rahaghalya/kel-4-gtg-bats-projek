<?php
// Keyword tidak case-sensitive
ECHO "Politeknik Negeri Jember<br>";
echo "Politeknik Negeri Jember<br>";
Echo "Politeknik Negeri Jember<br>";

// Variabel adalah case-sensitive
$color="red";
echo "My car is " . $color . "<br>";
echo "My house is " . $color . "<br>"; // Ini akan menghasilkan error/notice
echo "My boat is " . $color . "<br>"; // Ini akan menghasilkan error/notice
?>