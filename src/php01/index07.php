<?php
// function outputNumber($a)
// {
//     echo "引数の値は" . $a . "です";
//     return;
// }
// outputNumber(2);

// function outputHello()
// {
//     echo "Hello world";
// }
// outputHello();

// function text($number1, $number2)
// {
//     $value = $number1 + $number2;
//     return $value;
// }
// $total = text(2, 4);
// echo $total;

// function addNumber($a , $b)
// {
//     $add = $a + $b;
//     return $add;
// }
// $total = addNumber(2,3);
// print $total;

// function a($score1, $score2, $score3)
// {
//     $b = $score1 + $score2 + $score3;
//     if ($b > 210) {
//         echo "合計点は" . $b . "なので合格です";
//     }else{
//         echo "合計点は" . $b . "なので不合格です";
//     }
// }
// echo (a(50, 70, 100));

function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}
echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);