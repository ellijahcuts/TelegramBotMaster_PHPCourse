<?php
error_reporting(-1);

/*if(expression{
    instructions;
};*/

$light = "red";

if ($light == "green") {
    echo "GO";
} elseif ($light == "yellow") {
    echo "READY";
} else {
    echo "STOP!";
}

