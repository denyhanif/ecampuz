<?php


	function bagi($angka1,$angka2){
	  $hasil = 0;
        for ($i = 0; $i < $angka1; $i+=$angka2) {
            if ($angka1 - $i >= $angka2) {
                $hasil ++;
            }
        }
        echo "$angka1 : $angka2 = $hasil <br>";
	}
	
	echo bagi(8,2);
	echo bagi(7,2);
?>