<?php
// for ($i = 1; $i <= 5; $i++) {
//     echo $i * 2, "<br>";
// }

// $count = 0;
// while ($count < 20) {
//     $count +=1;
//     echo $count . "<br>";
// }

// while ($count <= 100) {
//     if ($count === 20){
//         break;
//     }
//     if ($count % 3 === 0){
//         $count ++;
//         continue;
//     }
//     echo $count . "<br>";
//     $count ++;
// }

// $num = 0;
// do{
//     echo "num=" . $num . "<br>";
//     $num ++;
// }while ($num <3);

// for ($FB = 1; $FB <=50; $FB ++) {
//     if ($FB % 3 == 0){
//         echo "Fizz";
//     }else if ($FB % 5 == 0){
//         echo "Buzz";
//     }else if ($FB % 15 == 0){
//         echo "FizzBuzz";
//     }else{
//         echo $FB;
//     }
//     echo "<br>";
// }
// $Fizz = "Fizz";
// $Buzz = "Buzz";
// $FizzBuzz = "FizzBuzz";
// for ($i = 1; $i <= 50; $i++) {
//   if ($i % 15 == 0) {
//     echo $FizzBuzz;
//   } else if ($i % 3 == 0) {
//     echo $Fizz;
//   } else if ($i % 5 == 0) {
//     echo $Buzz;
//   } else {
//     echo $i;
//   }
// echo "<br>";
// }

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "●";
    }
    echo "<br>";
}