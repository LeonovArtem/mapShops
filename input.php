<?php
/*  https://habrahabr.ru/post/259627/
Ключевое слово self в PHP всегда значит «имя класса, где это слово написано».
 В данном случае self заменяется на класс Model, а self::$table — на Model::$table.
Такая языковая возможность называется «ранним статическим связыванием».

Теперь вы понимаете, почему PHP ведёт себя в этой ситуации неинтуитивно.
self был связан с классом Model тогда, когда о классе User еще ничего не было известно, поэтому и указывает на Model.
*/
class Model
{
    public static $table='table';
    public static function getTable(){
        echo '<p>Текущий класс: '.get_called_class().'</p>';
        return self::$table;                                    //Заменили self на static

    }
}
class User extends Model
{
    public static $table='users';
}
echo Model::getTable();     //table
echo '<br>';
echo User::getTable();      //table
/*
     LSB (Late Static Binding).
Для решения этой дилеммы был придуман механизм связывания «позднего», на этапе рантайма.
Работает он очень просто — достаточно вместо слова «self» написать «static» и связь будет установлена с тем классом,
который вызывает данный код, а не с тем, где он написан:
*/

