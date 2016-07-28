<?php

$dir = '../../logs';

$filepathsArray = scandir($dir);

$arrayLog = array();

$i = 0;
foreach($filepathsArray as $file)
{
    if(strcmp($file, '.') == 0 || strcmp($file, '..') == 0)
    {
        continue;
    }
    $in = fopen('../../logs/' . $file, "r");
    while ($line = fgets($in))
    {
        if ($file == "gandalf_templog.log")
        {
            $arrayLog[$i]['log_file'] = "Gandalf Said:";
        }
        else if ($file == "sauron_templog.log")
        {
            $arrayLog[$i]['log_file'] = "Sauron Said:";
        }
        $arrayLog[$i]['log_message'] = $line;
        $i++;
    }
    fclose($in);
}

usort($arrayLog, function ($a, $b) {
    return strcmp($a['log_message'], $b['log_message']);
});

foreach ($arrayLog as $array)
{
    echo $array['log_file'] . "\t" .$array['log_message'];
}

?>