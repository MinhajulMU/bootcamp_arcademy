<?php
function hitungPohon($tinggiAwal,$tahun){

    for ($i=0; $i < $tahun; $i++) { 
        # code...
            //semi
        $tinggiAwal += 1;
        //panas
        $tinggiAwal += ($tinggiAwal*3);
        //gugur
        $tinggiAwal -= 1.5;
        //dingin
        $tinggiAwal += ($tinggiAwal * 0.15);
        if ($tahun %2 == 0) {
            # code...
            $tinggiAwal -= ($tinggiAwal *0.5);
        }

    }

    return $tinggiAwal;
}

echo hitungPohon(2,2);
?>