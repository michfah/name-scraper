<?php

$surname=$_GET['surname'];

$surname=str_replace(" ", "", $surname);

$surname = strtolower($surname);

$contents=file_get_contents("http://forebears.io/surnames/".$surname);

$pattern='/(User-submission:(.*?)<\/p><\/body>|Definition:(.*?)<\/p><\/body>)/';

preg_match($pattern, $contents, $matches);

echo $matches[1];

?>