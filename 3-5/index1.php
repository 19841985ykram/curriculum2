<?php
//step1
    //フルーツとその単価を対応させた連想配列を定義してください
    $fruits = [ "りんご" => 100 , "みかん" => 150 , "もも" => 500 ];
    //それぞれ配列の0:リンゴ、1:みかん、2:桃の順に個数を入力した配列を作成してください
   //🟡問題の文章では「配列を作成」となっていますが、連想配列ではいけないという事でしょうか？🟡
    $quantity = [ "りんご" => 3 , "みかん" => 1 , "もも" => 6 ];

    //step2
    //それぞれのフルーツの合計金額を計算する関数を定義してください。
    //引数はフルーツの単価・個数の２つ、返り値は計算した合計値を返します。
    function totalAmount($fruits,$quantity) {
      $totalAmount = $fruits * $quantity;
      return $totalAmount;
    }
      $totalAmount = totalAmount(100,3);
      $totalAmount = totalAmount(150,1);
      $totalAmount = totalAmount(500,6);
?>
<?php
//step3
    //繰り返しを使ってそれぞれのフルーツを書き出してください。
    foreach($fruits as $key => $value){
      //🟡下記の記述では、「単価」という文字まで繰り返されてしまう。🟡
       echo "単価".$key.":".$value."円";
    }
    echo '<br>';
    foreach($quantity as $key => $value){
       //🟡下記の記述では、「単価」という文字まで繰り返されてしまう。🟡
       echo "購入個数".$key.":".$value."個";
    }
    echo '<br>';
    echo "りんごは".$totalAmount = totalAmount(100,3)."円です。";
    echo '<br>';
    echo "みかんは".$totalAmount = totalAmount(150,1)."円です。";
    echo '<br>';
    echo "ももは".$totalAmount = totalAmount(500,6)."円です。";
   
?>



