<link rel="stylesheet" href="style.css">
<?php
//[question.php]から送られてきた名前の変数
$my_name = $_POST['my_name'];
// 選択した回答の変数
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
// 問題の答えの変数
$q1_a = $_POST["q1_a"];
$q2_a = $_POST["q2_a"];
$q3_a = $_POST["q3_a"];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function question ($select,$answer) {
  if($select == $answer) {
    $result = "正解！";
    //返り値を取得する
    return $result;
} else {
    $result = "残念・・・";
    return $result;
}
}
//関数の呼び出し
$result = question($q1,$q1_a);
$result = question($q2,$q2_a);
$result = question($q3,$q3_a);
?>

<p><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php $result = question($q1,$q1_a);?></p>
<p><?php echo $result;  ?></p>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php $result = question($q2,$q2_a);?></p>
<p><?php echo $result; ?></p>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php $result = question($q3,$q3_a);?></p>
<p><?php echo $result; ?></p>