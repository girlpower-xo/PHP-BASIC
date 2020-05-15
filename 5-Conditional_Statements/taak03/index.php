<!DOCTYPE html>
<html>
<body>


<?php
     $test1 = 3;
     $test2 = 6;
  

     
   if($test1 == $test2) {
    echo "gelijk!";
}
else {
    echo "niet gelijk!";
}


echo "<br>";
   
if($test1 != $test2) {
    echo "ongelijk!";
}

else {
    echo "wel gelijk!";
}

echo "<br>";

if($test1 === $test2) {
    echo "identiek!";
}

else {
    echo "niet identiek!";
}
echo "<br>";

if($test1 > $test2) {
    echo "test 1 is groter dan test 2";
}

else {
    echo "test 1 is niet groter dan test 2!";
}
echo "<br>";

if($test1 < $test2) {
    echo "test 1 is kleiner dan test 2";
}

else {
    echo "test 1 is niet kleiner dan test 2!";
}
echo "<br>";

if($test1 >= $test2) {
    echo "test1 is groter of gelijk aan test2";
}

else {
    echo "test 1 is niet groter of niet gelijk aan test 2!";
}
echo "<br>";
if($test1 <= $test2) {
    echo "test1 is kleiner of gelijk aan test2";
}

else {
    echo "test is niet kleiner of niet gelijk aan test 2!";
}

?>

    
</body>
</html>