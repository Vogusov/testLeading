<?php
include 'Item.php';

// создание экземпляра класса
$item = new Item(11);
echo '<hr>';

// получение свойств
echo "Получение приватных свойств объекта: <br>";
echo "ID: $item->id<br>";
echo "Name: $item->name<br>";
echo "Status: $item->status<br> ";

// попытка получить несуществующее свойство:
echo $item->inexistent;

echo '<hr>';

// задание свойств
echo "Задание свойств объекта:  <br>";
$item->name = '666';


















//
//$a = '';
//var_dump(empty($a), isset($a), is_null($a));
//var_dump(empty($b), isset($b), is_null($b));
//
