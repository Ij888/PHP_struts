<?php

    $name = "der mann";
        echo "<p>My name is $name</p>";

    $string1 = "<p>This is the first part";
    $string2 = "of a sentence</p>";
        echo $string1." ".$string2;

    $myNumber = 20;
    $calculation = $myNumber * 3 / 2 + 4;
        echo "The result of the calculation is ".$calculation;

    $myBool = false;
        echo "<p>Some truthy statement ".$myBool."</p>";

    $variableName = "name";
    echo $$variableName;
?>