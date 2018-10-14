<?php
    
$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $N);

if($N %2 == 0) {
       if($N >= 2 && $N <= 5) {
           printf('Not Wierd');
       }
       if($N >=6 && $N <= 20) {
           printf('Wierd');
       }
       if($N > 20) {
           printf('Not Wierd');
       }
    } else {
        printf('Wierd');
    }


fclose($stdin);