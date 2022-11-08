<?php

// associative array 

$me = array("monu"=>"12","chintu"=>"13","shyam"=>"15","mintu"=>"10");

// var_dump($me["monu"]);  



// includef foreach within associative array 

foreach( $me as $a => $a_satya){
    echo $a . " => " .$a_satya;
    echo "<br/>";
}
