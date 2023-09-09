<?php
function outputHello($score1,$score2,$score3)
{
    $value = $score1 + $score2 + $score3;
    if ($value > 210) {
        echo $value . "点なので合格です";


    }else {
        echo $value . "点なので不合格です";
    }

}
echo outputHello(80,60,90,);
