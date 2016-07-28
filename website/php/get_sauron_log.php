<?php

$file = file('../../logs/sauron_templog.log');

$lines = count($file);

$numberOfLinesToGetFromLog = 1000;

for ($i = max(0, $lines - $numberOfLinesToGetFromLog); $i < $lines; $i++)
{
    echo $file[$i];
}

?>