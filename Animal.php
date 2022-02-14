<?php

//1.Animalというクラスを作成
class Animal{
    public $cry = "bowbow!";
    /*2.bowというクラス関数を作成し、
    その関数内に「bowbow!」という文字を出力する処理を追加*/
    function bow(){
    echo $this->cry . PHP_EOL;
    }
}
class Dog extends Animal{
    public $cry = "わんわん！";
}
class Cat extends Animal{
    public $cry = "にゃあにゃあ！";
}

//3．クラスをインスタンス化
$dog = new Cat();
$dog ->bow();

    