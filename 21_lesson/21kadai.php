<?php

//課題１
$name="takatani";
if($name=="takatani")  {
  echo "私はあなたの名前です";
  echo "\n";
}else {
echo "あなたの名前ではありません";
echo "\n";
}
//課題２
$total=0;
for ($i=0; $i <1000 ; $i++) {
  $total +=$i;
}
echo $total;
echo "\n";


//課題３
$fruits=["バナナ","リンゴ","ミカン","イチゴ","パイナップル"];
foreach ($fruits as $fruit ) {
  echo "私の好きなフルーツは"." $fruit". " です";
  echo "\n";
}
//課題４
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

 ?>
