<?php 

$records = [
  [
    "id" => 2135,
    "first_name" => "John",
    "last_name" => "Doe"
  ],
  [
    "id" => 3245,
    "first_name" => "Sally",
    "last_name" => "Smith"
  ],
  [
    "id" => 5342,
    "first_name" => "Jane",
    "last_name" => "Jones"
  ],
  [
    "id" => 5623,
    "first_name" => "Peter",
    "last_name" => "Doe"
  ]
];

$first_name = array_column($records, "first_name", "id");
print_r($first_name);

class User 
{
    public $username;
    public $id;

    public function __construct(string $username, int $id)
    { 
        $this->username = $username;
        $this->id = $id;
    }
}

$users = [
  new User("User 1", 101),
  new User("User 2", 102),
  new User("User 3", 103),
];

print_r(array_column($users, "username", "id"));

class Person 
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __isset($name) : bool
    {
        return isset($this->$name);
    }
}

$people = [
  new Person("Fred"),
  new Person("Jane"),
  new Person("John")
];

print_r(array_column($people, "name"));