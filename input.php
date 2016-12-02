<?php
/*
Ключевое слово self в PHP всегда значит «имя класса, где это слово написано».
 В данном случае self заменяется на класс Model, а self::$table — на Model::$table.
Такая языковая возможность называется «ранним статическим связыванием».
*/
class Model
{
    public static $table='table';
    public static function getTable(){
        return self::$table;
    }
}
echo Model::getTable();
