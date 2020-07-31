<?php
//ABSTRACT
echo "ABSTRACT <br>";
abstract class Abstracted {

    public function accessFromOtherClass()
    {
        return 'Take abstract if you are other class <br/>';
    }

    abstract public function abstractedFunction();
};

class UserAbstracted extends Abstracted {

    public function abstractedFunction(){
        return $this->accessFromOtherClass();
    }
}
$instance = new UserAbstracted();
echo $instance->abstractedFunction();

echo '<hr>';
//ENCAPSULATION
echo "ENCAPSULATION <br>";
class Encapsulated {

    private $safe = 50;

    public function accessToSafe($how_much)
    {
        for ($i=0; $i < $how_much; $i++) { 
            $this->safe = $this->safe + 1;
            print_r('Raise if i let you : '.$this->safe.'<br>');

        }
    }
}
class UserEncapsulation extends Encapsulated {

    // public function accessToSafe($how_much)
    // {
    //     sleep(1);
    //     for ($i=0; $i < $how_much; $i++) { 
    //         $this->safe = $this->safe + 1;
    //         print_r('Raise by secund : '.$this->safe.'<hr>');
    //     }
    // }
}
//public: externally accessible
//protected: internally accessible and inherited by children classes
//private: only internally accessible and NOT inherited by children classes
$userEncapsulation = new UserEncapsulation();
//cant overwrite
$userEncapsulation->accessToSafe(5);
echo '<hr>';

//INHERITANCE
echo "INHERITANCE <br>";
class User {
    public $username;
    private $email;

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }
    public function addUser()
    {
        return "$this->email added a new user";
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function addEmail($email)
    {
        if(strpos($email, '@') > -1){
            $this->email = $email;
        }
    }
}

class NewUser extends User {
    public $role;
    public function __construct($username, $email, $role)
    {
        $this->role = $role;
        parent::__construct($username,$email);
    }
}
$user1 = new User('Shen', 'shen@mail.com');
$user2 = new User('Braum', 'braum@mail.com');

$admin = new NewUser('Riot', 'rito@pls.com', 'admin');

echo $admin->username. "<br>";
echo $admin->getEmail(). "<br>";
echo $admin->role. "<br>";

echo '<hr>';

//POLYMORPHISM
echo "POLYMORPHISM <br>";

interface Element {
    public function info();
}

class Water implements Element {
    public function info(){
        return 'H2O';
    }
}
class Fire implements Element {
    public function info(){
        return 'carbon dioxide, water vapor, oxygen, and nitrogen';
    }
}
class Air implements Element {
    public function info(){
        return 'o2';
    }
}
function describe(Element $element)
{
    echo get_class($element).'-';
    echo $element->info()." <br>";
}
$element = new Water;
describe($element);

$element = new Air;
describe($element);