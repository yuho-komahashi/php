1-6：繰り返し
<br>
<br>
for文
<br>
Q. for 文を使用して、結果が以下のようになるコードを記述
<br><br>
<?php
for($i = 1; $i <= 5; $i++){
    echo $i * 2 .'<br/>';
}
?>
<br>
<br>
while文
<br><br>
<?php
$count = 0;

while($count < 20){
    $count += 1;
    echo $count . '<br>';
}
?>
<br>
<?php
$count = 1;

while($count <= 20){
    echo $count;
    $count++;
}
?>
<br>
<br>
Q. while 文を使用して、結果が以下のようになるコードを記述
<br>
<?php
$count = 0;
while($count <= 100){
    if($count === 20){
        break;
    }
    if($count % 3 === 0){
        $count++;
        continue;
    }
    echo $count . '<br>'; 
    $count++;
}
?>
<br><br>
// 真の時に実行<br>
// 繰り返しの処理の中で変数の値を変化させる<br>
の通りに書くと、回答が異なる
<br>
<?php
$count = 0;
while($count <= 100){
    if($count === 20){
        break;
    }
    if($count % 3 === 0){
        $count++;
        continue;
    }
    $count++;
    echo $count . '<br>'; 
}
?>
<br>
<br>
do...while 文
<br><br>
<?php
$i = 0;
do{
    echo $i . '<br>';
    $i++;
} while($i < 5);
?>
<br>
<br>
Q. do...while 文を使用して、結果が以下のようになるコードを記述
<br>
<br>
<?php
$num = 0;

do{
    echo 'num= '. $num . '<br/>';
    $num += 1;
} while($num < 3);
?>
<br>
<br>
応用問題
<br>
Q. FizzBuzz問題
<br>
<?php
for($i = 1; $i <= 50; $i++){
    if($i % 3 === 0 && $i % 5 === 0){
        echo "FizzBuzz" . '<br/>';
    }elseif($i % 3 === 0){
        echo "Fizz". '<br/>';
    }elseif($i % 5 === 0){
        echo "Buzz". '<br/>';
    }else{
        echo $i. '<br/>';
    }
}
?>
<br>
<br>
Q. 二重ループ・・・そんなのやってねえし
<br>
<br>
<?php
for($outer = 1; $outer < 6; $outer++){
    for($inner = 1; $inner < 6; $inner++){
        echo "●";
    }
    echo "<br/>";
}
?>
<br>