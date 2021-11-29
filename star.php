<?php

$star = 5;

	for ($a = 1; $a <= $star; $a++){
        for($c = $star; $c >= $a; $c-=1){
            echo "*";
        }
	echo "<br>";
	}

    echo "<br>";

    for ($row = $star; $row > 0; $row--){
        for ($col = $star; $col >= $row; $col-=1){
            echo "*";
        }
	echo "<br>";
	}

    echo "<br>";

    for($row = $star; $row > 0; $row--){
        for($space = 1; $space <= $row; $space++){
            echo " &nbsp";
        }
        for($col = $star; $col >= $row; $col--) {
            echo "*";
        }
	echo "<br>";
	}

    echo "<br>";

    for($row = 1; $row <= $star; $row++){
        for($space = 1; $space <= $row; $space++){
		echo " &nbsp";
	} for($col = $star; $col >= $row; $col-=1){
		echo "*";
	}
	echo "<br>";
	}

?>