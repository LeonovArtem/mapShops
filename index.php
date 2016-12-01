<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="" rel="stylesheet" type="text/css">
</head>
<body>
<div id="content">
    <p>Java_Script Object:</p>
</div>
<h2>java_end;</h2>
<br>
</body>
<script>
    function User(name, age, password) {
        this.name = name;
        this.age = age;
        this.password = password;

        User.add = function (obj) {
            for (val  in obj) {
                $('#content').append('<h3>' + obj[val] + '</h3>');
            }
        };
    }
    var user_1 = new User('Artem', 28, 'pass');
    // User.add(user_1);
</script>
</html>
<?php

class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this Определена(';
            echo get_class($this);
            echo ')<br>';
        }else
            echo '$this  Не определена<br>';

    }
}
class B
{
    function bar()
    {
        A::foo();
    }
}
$a=new A;
$a->foo();
A::foo();

$b=new B;
//$b->bar();
//B::bar();