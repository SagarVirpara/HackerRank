<?php
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";

// Declare second integer, double, and String variables.
$ii = 3;
$dd = 3.0;
$ss = "String ";

// Read and save an integer, double, and String to your variables.
fscanf($handle, '%i', $ii);
fscanf($handle, '%f', $dd);
$ss = fgets($handle);

// Print the sum of both integer variables on a new line.
print($i + $ii."\n");

// Print the sum of the double variables on a new line.
printf("%.1f\n", $d + $dd);

// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
echo $s.$ss;

fclose($handle);
?>
