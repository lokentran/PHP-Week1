<?php
for ($i = 0; $i <3; $i++){
    echo "<br>";
    for ($j = 0; $j<7; $j++){
        echo "*";
    }
}
echo "<br>";
for ($i = 0; $i <5; $i++){
    echo "<br>";
    for ($j = 0; $j<$i; $j++){
        echo "*";
    }
}
echo "<br>";
for ($i = 0; $i <5; $i++){
    echo "<br>";
    for ($j = 5; $j>$i; $j--){
        echo "*";
    }
}