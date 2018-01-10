<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$N);

if($N % 2 != 0)
{
    echo "Weird";
}
else
{
    if($N > 2 && $N < 5)
    {
        echo "Not Weird";
    }
    if($N <= 20 && $N >= 6)
    {
        echo "Weird";
    }
    if($N > 20)
    {
        echo "Not Weird";
    }
}

?>
