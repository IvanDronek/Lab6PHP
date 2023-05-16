<?php
echo("Завдання 1")."\n";

class President{
    public $name = "Barack Obama";
    public function greet($name){
        return "Hello $name, my name is Barack Obama, nice to meet you!";
    }
}

$us_president = new President();
$president_name = $us_president->name;
$greetings_from_president = $us_president->greet("Donald");

echo $greetings_from_president."\n";

echo("Завдання 2")."\n";

class Pers0n{
    public $first_name;
    public $last_name;
    public function __construct($first_name, $last_name){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
    public function get_full_name(){
        return "$this->first_name $this->last_name";
    }
}

$ivan = new Pers0n('Ivan', 'Dronek');
echo $ivan->get_full_name()."\n";

echo("Task 3")."\n";

class CurrentUSPresident{
    const name = "Barack Obama";
    public static function greet($name){
        return "Hello $name, my name is Barack Obama, nice to meet you!";
    }
}

$president_name = CurrentUSPresident::name;
$greetings_from_president = CurrentUSPresident::greet("Donald");

echo $greetings_from_president."\n";

echo("Завдання 4")."\n";

class Person{
    const species = "Homo Sapiens";
    public $name;
    public $age;
    public $occupation;

    public function __construct($name, $age, $occupation){
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    public function introduce(){
        return "Hello, my name is $this->name";
    }

    public function describe_job(){
        return "I am currently working as a(n) $this->occupation";
    }

    public static function greet_extraterrestrials($species){
        return "Welcome to Planet Earth $species!";
    }
}

$ivan1 = new Person('Andrii', '19','Student');
$ivan_introduce = $ivan1->name;
$ivan_job = $ivan1->occupation;
$occupation = Person::species;

echo $ivan1->introduce()."\n";
echo $ivan1->describe_job()."\n";
echo $ivan1::greet_extraterrestrials('Human')."\n";

echo("Завдання 5")."\n";

class Salesman extends Person {
    public function __construct($name, $age){
        parent::__construct($name, $age, "Salesman");
    }
    public function introduce(){
        return parent::introduce().", don't forget to check out my products!";
    }
}

class ComputerProgrammer extends Person{
    public function __construct($name, $age){
        parent::__construct($name, $age, "Computer Programmer");
    }

    public function describe_job()
    {
        return parent::describe_job(). ", don't forget to check out my Codewars account ;)";
    }
}

class WebDeveloper extends ComputerProgrammer {
    public function __construct($name, $age){
        Person::__construct($name, $age, "Web Developer");
    }

    public function describe_job()
    {
        return parent::describe_job() . " And don't forget to check on my website :D";
    }

    public function describe_website(){
        return "My professional world-class website is made from HTML, CSS, Javascript and PHP!";
    }
}

$ivan2 = new Salesman('Ivan', '19');
$ivan_introduce2 = $andrii2->introduce();
$ivan_job2 = $andrii2->describe_job();
echo $ivan_introduce2."\n";
echo $ivan_job2."\n";

$ivan3 = new ComputerProgrammer('Ivan', '19');
$ivan_job3 = $ivan3->describe_job();
echo $ivan_job3."\n";

$ivan4 = new WebDeveloper('Ivan', '19');
$ivan_job4 = $ivan4->describe_job();
$my_site = $ivan4->describe_website();
echo $ivan_job4."\n";
echo $my_site."\n";

