<?php
$file = 'test.txt';
$searchfor =$_POST['name'];

header('Content-Type: text/plain');
$fdata = file_get_contents($file);
$contents=strtolower($fdata);
$pattern = preg_quote($searchfor, '/');
$pattern = "/^.*$pattern.*\$/m";
if(preg_match_all($pattern, $contents, $matches)){
   echo "Found matches:\n";
   echo implode("\n", $matches[0]);
}
else{
   echo "No matches found";
}