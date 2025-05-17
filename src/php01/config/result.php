<?php
$user_name = htmlspecialchars($_POST['user_name'], ENT_QUOTES);
echo "私の名前は、" . $user_name;
echo '<br />';

$merchandise = htmlspecialchars($_POST['merchandise'], ENT_QUOTES);
echo "ご希望の商品は、" . $merchandise;
echo '<br />';

$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
echo "注文数は、" . $number;
echo '<br />';
