<?php
include("fizzWhat.php");
$fizzWhat = new fizzWhat('php');
echo $fizzWhat->passProgrammingTest();

$fizzWhat->ohCrapInterviewerAskedForDifferentLanguage('java');
echo $fizzWhat->passProgrammingTest();

$fizzWhat->ohCrapInterviewerAskedForDifferentLanguage('my background is not really in programming');
echo $fizzWhat->passProgrammingTest();
?>