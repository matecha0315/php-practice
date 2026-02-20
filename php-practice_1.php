<?php
// Q1 変数と文字列
$name = '宮代';
echo '私の名前は「' . $name . '」です。'


// Q2 四則演算
$num = 5 * 4;
echo $num;
$num = $num / 2;
echo "\n" . $num;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');

echo '現在時刻は、' .  
date('Y') . '年' . 
date('m') . '月' . 
date('d') . '日' . 
date('H') . '時' . 
date('i') . '分' . 
date('s') . '秒です。';

// Q4 条件分岐-1 if文
$device = 'ぬ';

if ($device === 'windows') {
	echo '使用OSは、windowsです。';
} else {
	if ($device === 'mac') {
		echo '使用OSは、macです。';
	} else {
		echo 'どちらでもありません。';
	}
}

// Q5 条件分岐-2 三項演算子
$age = 17;
$message = ($age < 18) ? '未成年です。' : '成人です。';

echo $message;

// Q6 配列
$prefecture = ['茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県'];
echo $prefecture[1] . 'と' . $prefecture[4] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$prefecturalcapital = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];
	
echo $prefecturalcapital['東京都'] . "\n" . 
	 $prefecturalcapital['神奈川県'] . "\n" . 
	 $prefecturalcapital['千葉県'] . "\n" . 
	 $prefecturalcapital['埼玉県'] . "\n" . 
	 $prefecturalcapital['栃木県'] . "\n" . 
	 $prefecturalcapital['群馬県'] . "\n" . 
	 $prefecturalcapital['茨城県'];

// Q8 連想配列-2
$prefecturalcapital = [
	'東京都' => '新宿区',
	'神奈川県' => '横浜市',
	'千葉県' => '千葉市',
	'埼玉県' => 'さいたま市',
	'栃木県' => '宇都宮市',
	'群馬県' => '前橋市',
	'茨城県' => '水戸市'
	];
	
$input = "埼玉県";

if (isset($prefecturalcapital[$input])) {
	echo $input . "の県庁所在地は、" . $prefecturalcapital[$input] . "です。";
} else {
	echo "県の県庁所在地は、市です。";
}

// Q9 連想配列-3
$prefecturalcapital = [
	'東京都' => '新宿区',
	'神奈川県' => '横浜市',
	'千葉県' => '千葉市',
	'埼玉県' => 'さいたま市',
	'栃木県' => '宇都宮市',
	'群馬県' => '前橋市',
	'茨城県' => '水戸市'
	];
	
$input = ["東京都","神奈川県","千葉県","埼玉県","栃木県", "愛知県", "大阪府"];

for ($i = 0; $i <= 6; $i++) {
	if (isset($prefecturalcapital[$input[$i]])) {
		echo $input[$i] . "の県庁所在地は、" . $prefecturalcapital[$input[$i]] . "です。" . "\n";
	} else {
		echo $input[$i] . "は関東地方ではありません。" . "\n";
	}
}

// Q10 関数-1
function hello($name)
{
  echo $name . "さん、こんにちは。" . "\n";
}

hello("Kevin");
hello("miki");

// Q11 関数-2
function calcTaxInPrice($price)
{
	$taxInPrice = $price * 1.10 ;
	echo $price . "円の商品の税込価格は" . $taxInPrice . "円です。";
}

calcTaxInPrice(3000);

// Q12 関数とif文
function distinguishNum($value)
{
	if ($value % 2 === 0) {
		echo $value . "は偶数です。" . "\n";
	} else {
		echo $value . "は奇数です。" . "\n";
	}
	
}

distinguishNum(5);
distinguishNum(10);

// Q13 関数とswitch文
function evaluateGrade($grade)
{
	if ($grade === "A" || $grade === "B") {
		echo "合格です。" . "\n";
	} elseif ($grade === "C") {
	    echo "合格ですが追加課題があります。" . "\n";
	} elseif ($grade === "D") {
	    echo "不合格です。" . "\n";
	} else {
		echo "判定不明です。講師に問い合わせてください。" . "\n";
	}
	
}

evaluateGrade("A");
evaluateGrade("み");

?>