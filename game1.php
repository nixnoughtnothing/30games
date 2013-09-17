<?php

class dice
{


    public function roll() {
        return mt_rand(1,100);
    }

    public function roll2 ($sides) {
        return mt_rand(1,$sides);
    }


    public function roll3 ($sides1,$sides2) {
        return mt_rand($sides1,$sides2);
    }


    // ガチャシステム

    private $gachakakuritsu;
    private $rarity;

    public function roll4(){

        echo $this->gachakakuritsu = mt_rand(1,100),PHP_EOL;
        $this->rarity         = '';


        if($this->gachakakuritsu<20){
            return $this->rarity = 0;
        }else if(20<=$this->gachakakuritsu && $this->gachakakuritsu < 40){
            return $this->rarity = 1;
        }else if(40<=$this->gachakakuritsu && $this->gachakakuritsu < 60){
            return $this->rarity = 2;
        }else if(60<=$this->gachakakuritsu && $this->gachakakuritsu < 80){
            return $this->rarity = 3;
        }else if(80<=$this->gachakakuritsu && $this->gachakakuritsu < 100){
            return $this->rarity = 4;
        }
    }
}




$dice = new dice();

echo $dice->roll(),PHP_EOL;
echo $dice->roll2(10),PHP_EOL;
echo $dice->roll3(1,10),PHP_EOL;

echo $dice->roll4();


/**
* 使い道
* 
* さいころゲーム/ランダムなパスワード生成/ガチャ/
*
*/