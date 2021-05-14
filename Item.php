<?php

/**
 * класс Item
 *
 * @author Вогусов А.А. vogusov@gmail.com
 * @version 1.0
 */

final class Item
{
  /**
   * @var int
   */
  private int $id;

  /**
   * @var string
   */
  private string $name;

  /**
   * @var int
   */
  private int $status;

  /**
   * @var bool
   */
  private bool $changed = false;

  /**
   *
   */
  private array $itemData;

  /**
   * Item constructor.
   * @param $id
   */
  function __construct($id)
  {
    echo 'Конструктор! <br>';
    $this->id = $id;
    $this->init();
  }

  /**
   * Метод получает из БД name и status по ID
   * и заполняет ими соотвутствующие свойства экземпляра класса.
   * Данные хрантся в сыром виде в $itemData
   *
   * @return void
   *
   */
  private function init(): void
  {
    // получение из БД
    // $itemData = Db::getData($this->id):
    $this->itemData = ["Name_$this->id", 5];
    [$this->name, $this->status] = $this->itemData;
  }

  /**
   * Возможность получения свойств объекта, используя magic method
   *
   * @param $propertyName
   * @return mixed
   */
  function __get($propertyName)
  {
    echo "<br>Получение значения недоступного свойства $propertyName!<br>";
    if (property_exists($this, $propertyName)) {
      return $this->$propertyName;
    }
    echo("Нет свойства $propertyName!<br>");

  }

  /**
   * Возможность задание свойств объекта, используя magic methods с проверкой
   * вводимого значения на заполненность и тип значения.
   * Свойство ID не поддается записи.
   *
   * @param $propertyName
   * @param $value
   * @return void
   */
  function __set($propertyName, $value)
  {
    echo "Задание значения недоступному свойству $propertyName!<br>";

    // проверка на существование свойства у объекта
    if (!property_exists($this, $propertyName)) {
      echo("Нет свойства $propertyName!<br>");
      return;
    }

    // Запрет на изменение ID
    if ($propertyName == 'id') {
      echo("Свойство ID не поддается записи!<br>");
      return;
    }

    // проверка на заполненность вводимого значения
    if (empty($value)) {
      echo("Задаваемое значение не может быть пустым!<br>");
      return;
    }

    // проверка типа вводимого значения
    if (gettype($value) !== gettype($this->$propertyName)) {
      echo "Типы не совпадают";
      return;
    }

    $this->$propertyName = $value;
    $this->changed = true;

  }

  /**
   *
   * Метод сохраняет установленные значения name и status в случае,
   * если свойства объекта были изменены извне.
   *
   * @return void
   */
  public function save()
  {
    if (!$this->changed) {
      echo 'Данные не были изменены! Сохранять нечего. <br>';
      return;
    }

    // сохраняем в БД, если были изменения ($this->changed === true)
    // Db::saveToDb($name, $status):
    $this->itemData = [$this->name, $this->status];
    $this->changed = false;
    echo 'Данные сохранены успешно! <br>';
    return;
  }


}