<?php
  //日本のタイムゾーンに設定
  date_default_timezone_set('Asia/Tokyo');
  //フォームからのデータを受け取ります
  $number = $_POST["number"];
  // 受け取った数字からランダムな位置の数字を抜き出す。
  //🟡現在の記述「$omikuji = mt_rand(0,9);」では、受け取った数字「$number」を引数に使っていないので、
  // 別々の処理（受け取った数字とは関係なく、0~9のランダム数字を表示）になっていると思いますが、引数に（$number）を使うとエラーになってしまいます。
  //エラーは「Warning」（警告）と出ました。引数の指定が間違っているのでしょうか？🟡
  $omikuji = mt_rand(0,9);
  // おみくじの結果
  $result = "";
  if($omikuji == 0) {
    $result = "凶";
  } elseif($omikuji <= 3) {
    $result = "小吉";
  } elseif($omikuji <= 6) {
    $result = "中吉";
  } elseif($omikuji <= 8) {
    $result = "吉";
    // 🟡「0~8」は上の式で条件を指定しているので、それ以外という意味で最後にelseを
    // 記述しましたが、この処理や書き方であっていますか？（エラーは出なかったです。）
  } else {
    $result = "大吉";
  }
?>
<p><?php echo date("Y/m/d", time());?>の運勢は</p>
<p>選ばれた数字は<?php echo $omikuji; ?>です。</p>
<p><?php echo $result; ?></p>
