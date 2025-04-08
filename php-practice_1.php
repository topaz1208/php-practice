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
$prefectures = [
    '東京' => '新宿区',
    '神奈川' => '横浜市',
    '千葉' => '千葉市',
    '埼玉' => 'さいたま市',
    '栃木' => '宇都宮市',
    '群馬' => '前橋市',
    '茨城' => '水戸市'
];
foreach ($prefectures as $x => $y) {
    echo $y."\n";
};

// Q8 連想配列-2
foreach ($prefectures as $x => $y) {
    if($y == 'さいたま市'){
        echo $x.'県の県庁所在地は'.$y.'です。'."\n";
    }
};

// Q9 連想配列-3
$prefectures = [
    '東京' => '新宿区',
    '神奈川' => '横浜市',
    '千葉' => '千葉市',
    '埼玉' => 'さいたま市',
    '栃木' => '宇都宮市',
    '群馬' => '前橋市',
    '茨城' => '水戸市'
];
$prefectures['愛知'] = '名古屋市';
$prefectures['大阪'] = '大阪市';
foreach($prefectures as $x => $y){
    if($x !== '愛知' && $x !== '大阪'){
        echo $x.'県の県庁所在地は'.$y.'です。'."\n";
        }else{
        echo $x.'は関東地方ではありません。'."\n";
    };
 };

// Q10 関数-1
function hello($name)
{
    echo $name.'さん、こんにちは。'."\n"; 
}

hello('金谷');
hello('安藤');

// Q11 関数-2
$price = 1000;
$i = 10;
function calcTaxInPrice($price, $i)
{
    return $price + $price * ($i / 100);
}
$taxInPrice = calcTaxInPrice($price, $i);
echo $price.'円の商品の税込価格は'.$taxInPrice.'円です。';

// $price = 1000;
// function calcTaxInPrice($price)
// {
//     return $price * 1.1;
// }
// $taxInPrice = calcTaxInPrice($price);
// echo $price.'円の商品の税込価格は'.$taxInPrice.'円です。';



// Q12 関数とif文
function distinguishNum($number){
    if($number % 2 == 0){
        return $number.'は偶数です。'."\n";
    }else{
        return $number.'は奇数です。'."\n";
    }
}
echo distinguishNum(11);
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($i){
    switch($i){
        case 'A':
        case 'B':
            echo '合格です。'."\n";
            break;
        case 'C':
            echo '合格ですが追加課題があります。'."\n";
            break;
        case 'D':
            echo '不合格です。'."\n";
            break;
        default:
            echo '判定不明です。講師に問い合わせてください。'."\n";
    }
}
echo evaluateGrade('A');
echo evaluateGrade('p');

?>