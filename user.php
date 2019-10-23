<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */


/**
class User
{
    protected $connection = null;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=loginsystem", 'root', 'ftlSVOPh4Mrmda6vPY');
    }

    public function load($id)
    {
        $sql = 'SELECT * FROM users WHERE user_id = ' . (int) $id;
        $result = $this->connection->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);

        foreach($row as $column => $value) {
            $this->$column = $value;
        }
    }
}

**/

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class User extends Illuminate\Database\Eloquent\Model
{
    protected $primaryKey = 'user_id';

    public function __construct()
    {
        $capsule = new Capsule;
        $capsule->addConnection([
            "driver"    => "mysql",
            "host"      => "localhost",
            "database"  => "loginsystem",
            "username"  => "root",
            "password"  => "ftlSVOPh4Mrmda6vPY",
            "charset"   => "utf8",
            "collation" => "utf8_general_ci",
            "prefix"    => ""
        ]);

        $capsule->setEventDispatcher(new Dispatcher(new Container));
        $capsule->bootEloquent();
    }
}
