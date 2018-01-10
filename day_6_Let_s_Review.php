<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

fscanf($_fp, '%i', $t);

for ($i = 0; $i < $t; $i++)
{
    $str = fgets($_fp);
    $strlen = strlen($str);
    $arr = str_split($str);
    //print_r($arr);
    for($even = 0; $even < $strlen; $even += 2)
    {
        
        if($arr[$even] != "\n" && $arr[$even] != "\r" )
        {
            echo $arr[$even];
            //echo "got you";
        }
        //echo $arr[$even];
    }
    echo " ";
    for($odd = 1; $odd < $strlen; $odd += 2)
    {
        if($arr[$odd] != "\n" && $arr[$odd] != "\r")
        {
            echo $arr[$odd];
        }
    }
    echo "\n";
}
?>
