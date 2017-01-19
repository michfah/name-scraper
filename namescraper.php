<?php

$name=$_GET['name'];

$name=str_replace(" ", "", $name);

$name = strtolower($name);

$contents=file_get_contents("http://babynames.net/names/".$name);

preg_match('/More info about the name(.*?)<\/p>/s', $contents, $matches);

echo $matches[1];

?>