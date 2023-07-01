<?php

//TODO: Get from DataBase in the future.


$people[] = "Steve";
$people[] = "Michelle";
$people[] = "Shawn";
$people[] = "Matthew";
$people[] = "Karin";
$people[] = "Neil";
$people[] = "Emily";
$people[] = "Sean";
$people[] = "Oma";
$people[] = "Opa";
$people[] = "Reggie";
$people[] = "Fred";
$people[] = "Gidget";
$people[] = "Truman";
$people[] = "Johanna";
$people[] = "Bob";
$people[] = "Jim";
$people[] = "Tony";
$people[] = "Derek";
$people[] = "Tom";
$people[] = "Brad";
$people[] = "Scott";
$people[] = "Daniel";
$people[] = "Mike";
$people[] = "Mary";


//Get Query String

$q = $_REQUEST['q'];
$suggestion = '';

// Get suggestions
if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person) {
        if(stristr($q, substr($person, 0, $len))) {
            if($suggestion === "") {
                $suggestion = $person;
            } else {
                $suggestion .=  ", $person";
            }
        }
    }
}

echo $suggestion ==="" ? 'No Suggestion' : $suggestion;

?>