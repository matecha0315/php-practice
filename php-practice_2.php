<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します" . "\n" . "\n";
for ($i = 1; $i <= 100; $i++) {
	if ($i % 4 === 0 && $i % 5 === 0) {
		echo "tic-tac" . "\n";
	} elseif ($i % 4 === 0) {
		echo "tic" . "\n";
	} elseif ($i % 5 === 0) {
		echo "tac" . "\n";
	} else {
		echo $i . "\n";
	}
}

// Q2 多次元連想配列
	// 問題1
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

	echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。";

	//問題2
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

	foreach ($personalInfos as $key => $value) {
		$key++;
		echo $key . "番目の" . $value['name'] . "のメールアドレスは" . $value['mail'] . "で、電話番号は" . $value['tel'] . "です。" . "\n";
	}

	//問題3
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

	$ageList = [25, 30, 18];

	foreach ($personalInfos as $x => $y) {
			$personalInfos[$x]['age'] = $ageList[$x];
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
    
    public function introduce()
    {
        echo "学籍番号" . $this->studentId . "番の生徒は" . $this->studentName . "です。";
    }
}

$Yamadasan = new Student(120,"山田");
$Yamadasan->introduce();

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

    public function attend($lesson)
    {
        echo $this->studentName . 'は' . $lesson . 'の授業に出席しました。学籍番号：' . $this->studentId;
    }
    
    public function introduce()
    {
        echo "学籍番号" . $this->studentId . "番の生徒は" . $this->studentName . "です。";
    }
}

$Yamadasan = new Student(120,"山田");
$Yamadasan->attend('PHP');

// Q5 定義済みクラス
// 問題1
// $date = new DateTime();

// $date->modify('-1 month');
// echo $date->format('Y-m-d');
//↑見比べ用（メモ）
$date = new DateTime();

echo $date->modify('-1 month')->format('Y-m-d');

// 問題2
$start = new DateTime("1992-04-25");
$today = new DateTime();

$diff = $start->diff($today);
echo "あの日から" . $diff->days . "日経過しました。";