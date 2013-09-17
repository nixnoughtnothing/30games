<?php

// カードゲーム用のデッキ作成
$suits = array (
    "Spades", "Hearts", "Clubs", "Diamonds"
);

$faces = array (
    "2", "3", "4", "5", "6", "7", "8",
    "9", "10", "11", "12", "13", "1"
);

// デッキの配列を作成する
$deck = array();

foreach ($suits as $suit) {
    foreach ($faces as $face) {
        $deck[] = array ("face"=>$face, "suit"=>$suit);
    }
}

// デッキをシャッフルしてランダムなカードを出す
shuffle($deck);

// array_shiftは配列の先頭からのを取り出す。
// $card  = array_shift($deck);
// $card2 = array_shift($deck);

// すでに引いた組み合わせは使われているからcard1とcard2では絶対に重複しない仕組み。
//echo $card['face'] . ' of ' . $card['suit']."<br>";
//echo $card2['face'] . ' of ' . $card2['suit'];







// 5 枚のカードを持つ 2 つの手を作る

$hands = array(1 => array(), 2=>array());

for ($i = 0; $i < 5; $i++) {
    echo $hands[1][] = implode(" of ", array_shift($deck))."<br>";
    echo $hands[2][] = implode(" of ", array_shift($deck))."<br>";
}
echo "<br>";







// 次にデッキの中を調べ、カードが何枚残っているか、そして特定のカードを引くオッズがいくつかを調べます。カードが何枚残っているかは簡単です。単に $deck 配列の中に要素がいくつあるかを数えればよいだけです。
// echo $remaining = count($deck);

// 特定のカードを引くオッズを計算する

function calculate_odds($draw, $deck) {
    $remaining = count($deck);
    $odds = 0;
    foreach ($deck as $card) {
        if (  
              // 特定のカードを検索するとき
              ($draw['face'] == $card['face'] && $draw['suit'] == $card['suit'] ) ||
              // suitが一致しているカードを探すときを検索するとき 
              ($draw['face'] == '' && $draw['suit'] == $card['suit'] ) ||
              // faceが一致しているカードをさがすとき
              ($draw['face'] == $card['face'] && $draw['suit'] == '' ) ) {
            $odds++;
        }
    }
    return $odds . ' in ' .$remaining;
}



echo "特定のカードが残りのデッキにあるか検索する<br>";
$draw = array('face' => '1', 'suit' => 'Spades');

echo implode(" of ", $draw) . ' : ' . calculate_odds($draw, $deck)."<br><br>";


echo "指定されたsuitのカードが残りのデッキに何枚あるか検索する<br>";
$draw = array('face' => '', 'suit' => 'Spades');
echo $draw[suit]. ' : ' . calculate_odds($draw, $deck)."<br><br>";


echo "指定されたfaceのカードが残りのデッキに何枚あるか検索する<br>";
$draw = array('face' => '3', 'suit' => '');
echo $draw[face]. ' : ' . calculate_odds($draw, $deck);