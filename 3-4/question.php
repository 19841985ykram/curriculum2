<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$q1 = ["80","22","20","21"];
$q2 = ["PHP","Python","JAVA","HTML"];
$q3 = ["join","select","insert","update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
// 🟡「正解の選択肢の変数」を作成するという目的が分からない？
// 🟡下記の変数であっているのか？ 配列ではダメなのか？ $answer = ["80","HTML","select"];
$q1_a = "80";
$q2_a = "HTML";
$q3_a = "select";
?>

<p>お疲れ様です<?php echo $my_name;?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($q1 as $value) { ?>
    <input type="radio" name="q1" value="<?php echo $value; ?>" /> <?php echo $value; ?><br>
<?php } ?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($q2 as $value) { ?>
    <input type="radio" name="q2" value="<?php echo $value; ?>" /> <?php echo $value; ?><br>
<?php } ?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($q3 as $value) { ?>
    <input type="radio" name="q3" value="<?php echo $value; ?>" /> <?php echo $value; ?><br>
<?php } ?>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="my_name" value="<?php echo $my_name;?>"/>
<!-- 🟡「問題の正解の変数」を送るという処理は下記の記述であっているのか？ -->
<input type="hidden" name="80" value="<?php echo $q1_a;?>"/>
<input type="hidden" name="HTML" value="<?php echo $q2_a;?>"/>
<input type="hidden" name="select" value="<?php echo $q3_a;?>"/>
<input type="submit" value="回答する" />
</form>