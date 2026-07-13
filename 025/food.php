<?php

class Food{
    public $name;
    public $type;
    public $recipe;

    public function __construct($name,  $recipe){
        $this->name = $name;
        $this->recipe = $recipe;
    }

    public function showFood(){
        echo "<h2>$this->name</h2>";
        
        echo "<ul>";
        foreach($this->recipe->items as $item){
            echo "<li>$item</li>";
        }
        echo "</ul><hr>";
    }
}
class Type{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }
}

class Recipe{
    public $items;

    public function __construct($items){
        $this->items = $items;
    }
}



$recipe1 = new Recipe(["รากผักชีสับละเอียด","กระเทียมสับกลีบ","พริกขี้หนูสับหยาบ","เกลือ","ผงปรุงรส","ผักชีซอย"]);
$recipe2 = new Recipe(["พริกสด","กระเทียมกรีบเล็ก","น้ำมันพืช","พริกไทยป่น","ผงปรุงรส","น้ำตาลทราย","ซอยหอยนางรม","ซอยปรุงรส"]);
$recipe3 = new Recipe(["อกไก่","กระเทียม","พริกไทย","ซีอิ๊ว","น้ำมันหอย"]);
$recipe4 = new Recipe(["กุ้ง","พริก","กระชาย","ใบกะเพรา","พริกไทยอ่อน"]);
$recipe5 = new Recipe(["ปู","ผงกะหรี่","ไข่","นมสด","ต้นหอม"]);
$recipe6 = new Recipe(["หมู","พริกแกง","ถั่วฝักยาว","ใบมะกรูด","น้ำปลา"]);


$foods = [
    new Food("คั่วพริกเกลือ",  $recipe1),
    new Food("กะเพราแห้ง",  $recipe2),
    new Food("ผัดกระเทียมพริกไทย",  $recipe3),
    new Food("ผัดขี้เมา",  $recipe4),
    new Food("ผัดผงกะหรี่",  $recipe5),
    new Food("ผัดพริกแกง",  $recipe6)
];


foreach($foods as $food){
    $food->showFood();
}
?>