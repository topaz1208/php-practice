<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します。'."\n\n";
for($i = 1; $i <= 100; $i++){
    if($i % 4 === 0 && $i % 5 === 0){
        echo 'tic-tac'."\n";
    }elseif($i % 4 ===0){
        echo 'tic'."\n";
    }elseif($i % 5 === 0){
        echo 'tac'."\n";
    }else{
        echo "$i\n";
    }
}

// echo '1から100までのカウントを開始します。'."\n\n";
// for($i = 1; $i <= 100; $i++){
//     $output = ($i % 4 === 0 && $i % 5 === 0) ? 'tic-tac'
//     :(($i % 4 ===0) ? 'tic'
//     :(($i % 5 === 0) ? 'tac'
//     :$i));
//     echo $output."\n"
// }


//$i カウンター変数

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];
echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です。'."\n";

foreach($personalInfos as $index => $vals){
    $index = $index + 1;
    echo $index.'番目の'.$vals['name'].'のメールアドレスは'.$vals['mail'].'で、電話番号は'.$vals['tel'].'です。'."\n";
};

$ageList = [25, 30, 18];
foreach($personalInfos as $index => $vals){
    $personalInfos[$index]['age'] = $ageList[$index];
};
var_dump($personalInfos);


// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}
$yamada = new Student('120','山田');
echo '学籍番号'.$yamada->studentId.'番の生徒は'.$yamada->studentName.'です。'."\n";

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($course)
    {
        echo $this->studentName.'は'.$course.'の授業に出席しました。出席番号:'.$this->studentId."\n";
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
$date = new DateTime();
echo $date->modify('-1 months')->format('Y-m-d H:i:s')."\n";

$date2 = new DateTime('1992-4-25');
$diff = $date->diff($date2);
echo $diff->format('あの日から%a日経過しました。');

?>