<?php
class User
{
    static $alluser=[];

    public $name;
    public $age;
    public $password;
    public function __construct($name,$age,$password)
    {
        $this->name=$name;
        $this->age=$age;
        $this->password=$password;
        self::$alluser[]=$this;

    }
    public function getInfo(){
        echo '<pre>';
        print_r(static::$alluser);
        echo '</pre>';
    }

}
$user_1=new User('Artem',28,'mypa$$');
$user_2=new User('Leonov',31,'newpass');
$user_3=new User('Leonov',31,'newpass');
echo json_encode(User::$alluser);

$var = '';
// Проверка вернет TRUE, поэтому текст будет напечатан.
if (isset($var)) {
    echo "Эта переменная определена, поэтому меня и напечатали.";
    die('<p>Остановка..</p>');
}

echo '<p>Продолжаем...<p>';
