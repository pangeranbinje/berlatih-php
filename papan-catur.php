<?php

function papan_catur($angka) {
    echo "<table>";
    $angka = $angka *2;
    for($i=0; $i < $angka; $i++){
        echo "<tr>";
        for($j=0; $j < $angka - 1; $j++){
            if($i % 2 == 0){
                if($j % 2 == 0){
                    echo '<td> </td>';
                } else {
                   echo '<td>#</td>'; 
                }
            } else {
               if($j % 2 == 0){
                    echo '<td>#</td>';
                } else {
                   echo '<td> </td>'; 
                } 
            }
        }
        echo "</tr>";

    }
    echo "<table>";
    echo "<br>";

}

// TEST CASES
echo papan_catur(4) ;
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5) ;
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/