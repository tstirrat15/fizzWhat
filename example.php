<?php
include("fizzWhat.php");
$fizzWhat = new fizzWhat('php', array(1000, 2, 3));
echo $fizzWhat->passProgrammingTest();

$fizzWhat->ohCrapInterviewerAskedForDifferentLanguage('java');
echo $fizzWhat->passProgrammingTest();

$fizzWhat->ohCrapInterviewerAskedForDifferentLanguage('my background is not really in programming');
echo $fizzWhat->passProgrammingTest();
?>