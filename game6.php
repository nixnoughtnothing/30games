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


// 5 枚のカードを持つ 2 つの手を作る

$hands = array(1 => array());

for ($i = 0; $i < 5; $i++) {
    echo "<input type='checkbox' name='card[" .$hands. "]'>";
    echo $hands[1][] = implode(" of ", array_shift($deck))."<br>";
}
echo "<br>";


/*
foreach ($hands[1]as $index =>$card) {
" . $card['face'] . ' of ' . $card['suit'] . "<br />";
}

// 次に、入力配列 $_POST['card'] を評価し、交換用としてチェックされたカードはどれかを調べます。*/


/*
// 5 枚のカードを持つ 1 つの手を作り、チェックボックスを使って交換するカードを示す
echo "<html><head></head><body>"
echo "<form method="POST" action="">";
$hands = array();

for ($i = 0; $i < 5; $i++) {
    echo "<input type='checkbox' name='card[" . $hands . "]'>";
    echo $hands = implode(" of ", array_shift($deck))."<br>";
}
echo "<br>";
echo "</form></body></html>";





// 入力を評価する

    if (isset($_POST['card[" . $hands . "]'])) {
        echo $card = $_POST['card[" . $hands . "]']
    }
    
}
*/



?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>メイン画面</title>
    </head>
    <body>
    <h1>game6</h1>
        <form method="POST" action="">
    <?php $hands = array(1 => array()); ?> 
    <?php for ($i = 0; $i < 5; $i++) { ?>
        <input type='checkbox' name='<?php echo $hands ?>' >
        <?php $hands[1][] = implode(" of ", array_shift($deck));?>><br>
    <?php } ?>
         </form>
    </body>
</html>










