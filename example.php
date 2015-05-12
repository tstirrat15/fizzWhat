<?php
include("fizzWhat.php");

$fizzWhat = new fizzWhat('php');
echo $fizzWhat->passProgrammingTest();

//Oh god oh god isn't Java for engineers? Why hath thou done this to me.
$fizzWhat->ohCrapInterviewerAskedForDifferentLanguage('java');
echo $fizzWhat->passProgrammingTest();

//screw it I give up.
$fizzWhat->ohCrapInterviewerAskedForDifferentLanguage('my background is not really in programming');
echo $fizzWhat->passProgrammingTest();
?>
