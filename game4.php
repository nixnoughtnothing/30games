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
$card  = array_shift($deck);
$card2 = array_shift($deck);

// すでに引いた組み合わせは使われているからcard1とcard2では絶対に重複しない仕組み。
echo $card['face'] . ' of ' . $card['suit']."<br>";
echo $card2['face'] . ' of ' . $card2['suit'];

