<?php
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
// 🟡選択した回答の変数はこれであっているのか？
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
// 🟡問題の答え変数はこれであっているのか？
$q1_a = $_POST["80"];
$q2_a = $_POST["HTML"];
$q3_a = $_POST["select"];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
// 🟡引数は（①選択した回答の変数、②正解の変数）だと思うが、({引数①$q1,$q2,$q3},{引数②$q1_a,$q2_a,$q3_a})は明らかにおかしいと感じるが、どう定義したら良いかが分からない？
function question () {
  if( == ) {
    $result = "正解！";
} else {
    $result = "残念・・・";
}
}
question(); //🟡引数の値は何を入れたら良いかがテキストを見ても分からない。
?>

<p><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $result; ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $result; ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $result; ?>