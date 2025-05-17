1-8:配列と連想配列・・・出たでた
<br>
<br>
<br>
array関数の例<br><br>
<?php
$people = array('Taro','Jiro','Saburo');
var_dump($people);
echo"<br/>";
echo $people[0];
?>
<br>
<br>
連想配列の例
<br><br>
<?php
$people = array(
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
);
var_dump($people);
?>
<br>
<br>
<?php
$people = [
    'person1' => 'Taro',
    'person2' => 'Jiro',
    ];
    echo $people['person1'];
?>
<br>
<br>
多次元配列
<br><br>
<?php
$people = [
[
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 15,
    "position" => "ファースト"
],
[
    "last_name" => "要",
    "first_name" => "圭",
    "age" => 16,
    "position" => "キャッチャー"
],
[
    "last_name" => "清峰",
    "first_name" => "葉流火",
    "age" => 15,
    "position" => "ピッチャー",
],
[
    "last_name" => "藤堂",
    "first_name" => "葵",
    "age" => 15,
    "position" => "ショート",
],
[
    "last_name" => "千早",
    "first_name" => "瞬平",
    "age" => 15,
    "position" => "セカンド",
]
];
echo $people[0]["last_name"];
?>
<br>
<br>
foreach文
<br><br>
<?php
$people = array('Taro','Jiro','Saburo');

foreach($people as $person){
    echo $person;
    echo '<br>';
}
?>
<br>
<br>
<?php
$people = array(
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
);

foreach($people as $person => $name){
    echo $person . "は" . $name . "です" .'<br/>';
}
?>
<br>
<br>
Q. foreach文をつかって多次元配列の値をすべて出力
<br><br>
<?php
$people = [
    ['Taro', 25 , 'men'],
    ['Jiro', 20 , 'men'],
    ['hanako', 16 , 'women']
];
foreach($people as $person){
    echo $person[0].'(' . $person[1] . '歳'. $person[2].')'.'<br/>';
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
