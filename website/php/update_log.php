<?php

$lastLogEntry = $_POST['postlastLog'];

$log = file_get_contents('../../logs/python_templog.log');

$cutPos = strpos($log, $lastLogEntry);

$lengthOfLastEntry = strlen($lastLogEntry);

$lastEntryEndLoc = $cutPos + $lengthOfLastEntry + 1;

$totalLogLength = strlen($log);

if ($totalLogLength > $lastEntryEndLoc)
{
    $difference = $totalLogLength - $lastEntryEndLoc;
    $newLog = substr($log, $lastEntryEndLoc, $difference);
    echo $newLog;
}

?>