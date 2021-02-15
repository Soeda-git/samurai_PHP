<?php

for($i=1; $i <= 30; $i++){
    print($i."\n");
}

for($ii=1; $ii<=30; $ii++){
    if($ii%5 == 0){
        print("BUZZ"."\n");
    }else{
        print($ii."\n");
    }
}

for($iii=1;$iii<=30; $iii++){
    if($iii%15 == 0){
        print("FIZZBUZZ"."\n");
    }elseif($iii%5 == 0){
        print("BUZZ"."\n");
    }elseif($iii%3 == 0){
        print("FIZZ"."\n");
    }else{
        print($iii."\n");
    }
}

?>