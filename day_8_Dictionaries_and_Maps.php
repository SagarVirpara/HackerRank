<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

// get the size
fscanf($_fp, "%i", $n);

// run through the inputs
for($i = 0; $i < $n; $i++)
{
    $str = fgets($_fp);
    $arr = explode(" ", $str);
    $name = $arr[0];
    $phone = $arr[1];
    $keyValueArray[$name] = $phone;
}

// run through the string input
while(($query = fgets($_fp)))
{
    //replace new line on query.
    $query = str_replace("\n", '', $query);
    
    //check if the number is available.
    if (isset($keyValueArray[$query]))
    {
        echo $query.'='.$keyValueArray[$query];
    }
    else
    {
        echo "Not found\n";
    }
}

?>