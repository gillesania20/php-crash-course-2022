<?php
    /* ----- Object Oriented Programming ----- */

    /*
    From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold
    "properties" and "methods". Objects can be created from classes.
    */

    class User{
        // Properties are attributes that belong to a class

        // Access Modifiers: public, private, protected
        // public - can be accessed from anywhere
        // private - can only be accessed from inside the class
        // protected - can only be accessed from inside the class and by inheriting classes
        public $name;
        public $email;
        public $password;

        // A contructor is method tha runs when an object is created
        public function __construct($name = null, $email = null, $password = null){
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }
        // Method is function that belongs to a class
        function set_name($name) {
            $this->name = $name;
            return null;
        }
        function get_name(){
            return $this->name;
        }
    }

    // Instantiate a user object
    $user1 = new User('name', 'email', 'password');
    $user1->name = 'Renz';
    $user1->set_name('test');
    echo $user1->name . '<br>';
    echo $user1->get_name() . '<br>';
    echo $user1->password . '<br>';

    // Inheritance
    class Employee extends User {
        public function __construct($name = 'name', $email = 'email', $password = 'password', $title = 'title'){
            parent::__construct($name, $email, $password);
            $this->title = $title;
        }
    }

    $employee1 = new Employee();
    echo $employee1->name . '<br>';
    echo $employee1->get_name() . '<br>';

?>