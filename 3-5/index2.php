<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>チャレンジ問題 くじ引き</title>
</head>

<body>
  <form action="result.php" method="post">
    0~9の番号を使って好きな数字の羅列を入力してください。
    <br>
    <!-- 🟡type属性を「number」のままだと、例題の様に枠が広がらないので、「text」にしましたが、この記述であっているのか？
    又「適当な数字（０〜９）の羅列を入力」というのは、桁数の指定はいらないという事ですか？🟡 -->
    <input type="text" name="number" placeholder="0~9の番号を入力"/>
    <input type="submit" value="占う" />
  </form>
</body>

</html>