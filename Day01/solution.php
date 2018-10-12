<?php
    $handle = fopen("php://stdin","r");
    $i = 4;
    $d = 4.0;
    $s = "HackerRank ";

    // Declare second integer, double, and String variables.\
    $x; $y; $z;

    // Read and save an integer, double, and String to your variables.
    fscanf($handle, "%i", $x);
    fscanf($handle, "%lf", $y);
    $z = fgets($handle);

    // Print the sum of both integer variables on a new line.
    printf("%d\n", $i + $x);

    // Print the sum of the double variables on a new line.
    printf("%.1f\n", $d + $y);

    // Concatenate and print the String variables on a new line
    // The 's' variable above should be printed first.
    printf($s . $z . "\n");

    fclose($handle);
?>