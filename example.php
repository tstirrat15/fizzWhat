<?php
include("fizzWhat.php");
$fizzWhat = new fizzWhat('php');
echo $fizzWhat->passProgrammingTest();

$fizzWhat->ohCrapInterviewerAskedForDifferentLanguage('java');
echo $fizzWhat->passProgrammingTest();
?>