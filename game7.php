<?php

    /**
    *Hangman Player
    *
    *@author Ryoh Tsukahara
    *
    */

    /*
    // 単語リストを作成する
    $words = array (
        "giants",
        "triangle",
        "particle",
        "birdhouse",
        "minimum",
        "flood"
    );
    */
    // 文字を保持する配列と推測の当たり外れを保持する配列を作成する
    $letters = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    // array_fill_keys(@param1 配列/keyになる,@param2 値）
    $right = array_fill_keys($letters, ' _ ');
    $wrong = array();
    // var_dump($right);

    $guess = null;

    if(isset($_POST['guess'])){
          $guess = $_POST['guess'];   
    }


    // $wordsからランダムにキーを取得
    // $word_key  = array_rand($words);

    // $wordsからランダムに要素を取得    
    // $word      = $words[$word_key];

    $word = 'giants';
    // 推測を評価し、ゲームの進行に合わせた表示をする

    // stristr(param1において、param2が最初に見つかった場合、)    
    if (stristr($word, $guess)) {
        $show = array();
        // 値とキーが重なるところに値を代入する
        $right[$guess] = $guess;

        // str_split(文字列を配列に分割する)
        $wordletters = str_split($word);

        var_dump($wordletters);
        foreach ($wordletters as $letter) {
            echo $show = $right[$letter];
        }
      
    } else {
        $show = '';
        $wrong[$guess] = $guess;
        var_dump($wrong);
        if (count($wrong) == 6) {
            echo "ゲームオーバー!正解はこれ".$show = $word;
        } else {
            foreach ($wordletters as $letter) {
            echo $show .= $right[$letter];
            }
        }
    }


?>

<!DOCTYPE html>
<html>
<head>
    <title>Hangman Game</title>
</head>
<body>
    <h1>Hangman Game</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td><p>推測する:</p></td>
                <td><input type="text" name="guess"></td>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>


