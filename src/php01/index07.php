c
引数と戻り値あり
<br><br>
<?php
function outputNumber($a){
    echo "引数の値は" . $a . "です";
    return;
}
outputNumber(2);
?>
<br>
<br>
引数と戻り値なし<br><br>
<?php
function outputHello(){
    echo "Hello,World";
}
outputHello();
?>
<br>
<br>
引数と戻り値なし(またですけど)<br><br>
<?php
function text($number1,$number2){
    $value = $number1 + $number2;
    return $value;
}
$total = text(2, 4);
echo $total;
?>
<br>
<br>
Q. 関数を定義して、結果が5になるコードを記述・・・いみふ
<br><br>
<?php
function addNumber($a,$b){
    $add = $a + $b;
    return $add;
}
$total = addNumber(2,3);
print $total;
?>
<br>
<br>
問題1　合格点は○○です問題
<br><br>
<?php
function exam($score1,$score2,$score3){
    $total = $score1 + $score2 + $score3;
    if($total > 210){
        echo "合計点は" . $total . "点なので合格です";
    }else{
        echo "合計点は" . $total . "点なので不合格です";
    }
}
exam(90,60,70); //echoはいらないってさ！先生が！
?>
<br>
<br>
問題2 三角形・四角形・台形の面積<br><br>
<?php
function getTriangleArea($bottom,$height){
    return $bottom * $height / 2;
}
function getSquareArea($vertical,$horizontal){
    return $vertical * $horizontal;
}
function getTrapezoidArea($upperBase,$lowerBase,$height){
    return ($upperBase + $lowerBase) * $height / 2;
}
echo getTriangleArea(10,10). '<br/>';
echo getSquareArea(10,10). '<br/>';
echo getTrapezoidArea(15,18,10). '<br/>';
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



