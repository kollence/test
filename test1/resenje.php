<?php


function levaRotacija($niz, $brojRotacija) 
{
    for ($i=0; $i < $brojRotacija; $i++) { 
       $last = array_pop($niz);
       array_unshift($niz, $last);
       print_r($niz);
    }
}
$arr = range(1,5);
levaRotacija($arr,2);