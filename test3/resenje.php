<?php

function deljiviParovi($niz, $deljivSa) 
{
    $final = [];
    foreach ($niz as $value) {
        foreach ($niz as $v) {
            if($v !== $value){
                $rez = $value + $v;
                    if($rez % $deljivSa){
                    }else {
                        if ($value < $v) {
                        array_push($final, [$value,$v]);
                        }
                    }
            }
        }
    }
    print_r($final);
}
$niz = [1,2,3,4,5];
deljiviParovi($niz, 2);