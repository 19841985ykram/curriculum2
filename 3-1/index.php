<?php
//1から100までの数を繰り返す。
for($i = 1; $i <= 100; $i++) {
  //3の倍数かつ5の倍数の時「FizzBuzz!!」と出力する
  if($i % 3 === 0 && $i % 5 === 0) {
    echo 'FizzBuzz!!';
  //3の倍数の時「Fizz!」と出力する
  } elseif($i % 3 === 0) {
    echo 'Fizz!';
  //5の倍数の時「Buzz!」と出力する
  } elseif($i % 5 === 0) {
    echo 'Buzz!';
  //3の倍数でも5の倍数でもない場合は、その数を出力する
  } else {
    echo $i;
  }
  //見やすい様に改行する
    echo '<br>';
}
?>