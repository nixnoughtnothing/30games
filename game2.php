<?php 

/**ramdom nameジェネレーター
*
*
*
*/

class name
{

    private $first;
    private $last;


    //コンストラクタ    
    public function __construct()
    {
        // 苗字用と名前用の 2 つの単純な配列
        $this->first = explode(',', file_get_contents('/var/www/html/30games/game2/names.first.txt'));

        $this->last  = explode(',', file_get_contents('/var/www/html/30games/game2/names.last.txt'));
    }

    // 名前の配列からランダムで1つずつ取り出すメソッド1
    public function name1()
    {

        //  戻り値（配列$firstのキー） =  array_rand($first);
        echo $this->first[array_rand($this->first)] . ' ' . $this->last[array_rand($this->last)]; 
    }


    // 名前の配列をシャッフルするメソッド2
    public function name2()
    {
        shuffle($this->first);
        shuffle($this->last);

        for ($i = 0; $i < 5; $i++) {
            echo $this->first[$i] . ' ' . $this->last[$i].'<br>';
        }
    }


    public function getNameText()
    {
        // 名前用のテキストファイルを作成する
        // explode(分割文字、分割対象文字列) /　特定の文字列で分割して配列に格納できる関数 
        // file_get_contents()関数は引数で指定されたパスのファイルを読み込み、文字列として返します。

        $this->first = explode(',', file_get_contents('/var/www/html/30games/game2/names.first.txt'));
        $this->last  = explode(',', file_get_contents('/var/www/html/30games/game2/names.last.txt'));

        echo "ファーストネーム/テキスト一覧<br>";

        foreach($this->first  as $first2){
            echo $first2."<br>";
        }   

        echo "<br>";

        echo "ラストネーム/テキスト一覧<br>";
        foreach($this->last   as $last2){
            echo $last2."<br>";
        }
    }
}

$name = new name;
$name->name1();
echo "<br><br>";
$name->name2();
echo "<br><br>";
$name->getNameText();



