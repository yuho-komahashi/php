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