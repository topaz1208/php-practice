<?php
// Q1 変数と文字列
$myname = '淺海莉絵';
$name = '私の名前は'.$myname.'です。';
echo $name."\n";


// Q2 四則演算
$num = 5 * 4;
echo "$num \n";
$num /= 2;
echo "$num \n";

// Q3 日付操作
$date = 'Y年m月d日 H時i分s秒';
echo date('現在時刻は'.$date.'です。')."\n";

// Q4 条件分岐-1 if文
$device = 'mac';
if($device === 'windows' || $device === 'mac'){
    echo 'OSは'.$device.'です';
}else{
    echo 'どちらでもありません。'; 
}"\n";

// Q5 条件分岐-2 三項演算子
$age = 18;
$message = ($age < 18) ? '未成年です。' : '成人です。';
echo $message."\n" ;

// Q6 配列7
$kanto = ['東京','神奈川','茨城','栃木','千葉','埼玉','群馬'];
echo $kanto[3].'県と'.$kanto[4].'県は関東地方の都道府県です。';
var_dump($kanto);
// Q7 連想配列-1


// Q8 連想配列-2


// Q9 連想配列-3


// Q10 関数-1


// Q11 関数-2


// Q12 関数とif文


// Q13 関数とswitch文


?>