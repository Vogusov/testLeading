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

// меняем status
$item->status = 555;
echo $item->status . '<br><br>  ';

// id не должен меняться!
$item->id = 333;
echo $item->id . '<br><br>  ';

// задание значения не того типа данных
$item->name = 444;
echo $item->name . '<br><br>  ';

// сохраняем данные объекта в "БД"
echo $item->save();

echo '<hr>';



//Проверка сохраненных данных!
$newItem = new Item(11);
// получение свойств
echo "Получение приватных свойств объекта: <br>";
echo "ID: $item->id<br>";
echo "Name: $item->name<br>";
echo "Status: $item->status<br> ";

// сохранение неизмененных данных
echo '<br>';
$newItem->save();
















//
//$a = '';
//var_dump(empty($a), isset($a), is_null($a));
//var_dump(empty($b), isset($b), is_null($b));
//
