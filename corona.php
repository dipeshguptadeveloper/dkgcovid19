<?php

$data = file_get_contents('https://api.covid19api.com/summary');
$cornonadata = json_decode($data);

echo "<pre>";
print_r($cornonadata);
?>