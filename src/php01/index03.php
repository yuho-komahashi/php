<?php
$item = "JavaScript";
$item = "PHP";
echo $item;
?>
<br>
<?php echo "こんにちは"; ?>
<br>
<?php
    echo 7 * 2;
?>
<br>
<?php
$item = "JavaScript";
echo $item;
?>
<br>
<?php
const TEST="あいうえお";
echo TEST;
?>
<br><br>
<?php
echo 20;
?>
<br>
<?php
echo "こんにちは";
?>
<br>
<br>
<?php
$name1 = "佐藤"."太郎";
$name2 = "田中";
$last_name = "山田";
$first_name = "三郎";

echo $name1;
echo"<br/>";
echo $name2."次郎";
echo "<br/>";
echo $last_name.$first_name;
?>
<br>
<br>
<?php
$q_name = "Tanaka";
$q_last_name = "Yamada";
$q_first_name = "Saburo";

echo $q_name."Jiro";
echo"<br/>";
echo $q_last_name.$q_first_name;
?>
<br>
<br>
1-4：演算子
<br>
算術演算子
<br>
<?php
$a = 15;
$b = 3;
$c = 10;

$answer1 = $a+$b;
$answer2 = $a-$b;
$answer3 =  $a*$b;
$answer4 = $a/$b;
$answer5 = $a%$c;

echo $answer1;
echo"<br/>";
echo $answer2;
echo"<br/>";
echo $answer3;
echo"<br/>";
echo $answer4;
echo"<br/>";
echo $answer5;
?>
<br>
<br>
代入演算子と複合演算子
<br>
<?php
$a = 15;
$b = 3;
$c = 10;
$d = 5;

$a = $b;
$c += $d;

echo $a;
echo"<br/>";
echo $c;
echo"<br/>";
?>
<br>
<br>
比較演算子
<br>
<br>
<?php
$a = 20;
$b = 5;

echo ($a > $b);
echo"<br/>";
?>
<br>
<br>
論理演算子
<br>
<br>
<?php
$a = 20;
$b = 5;

echo ($a >10 && $a <30);
?>
<br>
<br>
加算子と減算子
<br>
<?php
$a = $b = 10;
$c = $d = 5;

echo ++$a;
echo "<br />";
echo $b++;
echo "<br />";
echo --$c;
echo "<br />";
echo $d--;
?>
<br>
<br>
1-5：条件分岐
<br><br>
if文
<br><br>
<?php
$a = 5;

if($a === 5){
    echo '$aは5です';
}
?>
<br>
<br>
if~else文
<br><br>
<?php
$a = 7;

if($a === 5){
    echo "\$aは5です";
}else{
    echo "\$aは5以外です";
}
?>
<br><br>
if~elseif~else文
<br><br>
<?php
$a = 7;

if($a === 5){
    echo "\$aは5です";
}else if($a === 7){
    echo "\$aは7です";
}else{
    echo "\$aは5と7以外です";
}
?>
<br>
<br>
switch文
<br><br>
<?php
$people = "Saburo";

switch($people){
    case "Taro";
    echo "太郎です";
    break;
    case "Jiro";
    echo "次郎です";
    break;
    case "Saburo";
    echo "三郎です";
    break;
}
?>
<br>
<br>
三項演算子
<br><br>
<?php
$a = 7;
$b = ($a > 5)? "TRUE" : "FALSE";
echo $b;
?>
<br>
<br>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>





