<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);

$binaryNumber = decbin($n);
$splittedNumber = str_split($binaryNumber);

$count = 0;
$maxCount = 0;

for($i = 0; $i < $n; $i++)
{
    if($splittedNumber[$i] == 1)
    {
        $count += 1;
    }
    else
    {
        if($count > $maxCount)
            $maxCount = $count;
    $count = 0;
    }
}

if($count > $maxCount)
    $maxCount = $count;

echo $maxCount;

fclose($handle);

?>
