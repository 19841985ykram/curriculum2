<?php
  //②フォームからのデータを受け取ります
  $my_name = $_POST['my_name'];
  $number = $_POST['number'];

  // ③受け取った数字に1~6までのランダムな数字を掛け合わせて
  // 変数に入れてください
  // 乱数取得
  $rand = rand(1, 6);
  // 乱数と掛け合わせた式
  $omikuji = $number * $rand;
  // おみくじの結果
  $result = "";
  if($omikuji <= 10) {
    $result = "凶";
  } elseif($omikuji <= 15) {
    $result = "小吉";
  } elseif($omikuji <= 20) {
    $result = "中吉";
  } elseif($omikuji <= 25) {
    $result = "吉";
  } elseif($omikuji <= 36) {
    $result = "大吉";
  } else {
    $result = "残念";
  }
  // ⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう
  date_default_timezone_set('Asia/Tokyo'); //日本のタイムゾーンに設定
  echo date("Y-m-d H:i:s", time());
?>

<p>名前は<?php echo $my_name; ?>です。</p>
<p>番号は<?php echo $omikuji; ?>です。</p>
<p>結果は<?php echo $result; ?>です。</p>
