<?php

namespace SON\Pdo;


class ConfigBD {

    private $dsn = "mysql:host=localhost:3306;dbname=code_education";
    private $username = "root";
    private $password = '';

    public function connection()
    {

        try {
            $pdo = $this->connection = new \PDO("{$this->dsn}", $this->username, $this->password);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;

        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    }

    public function ConnectionBD()
    {
        return $this->connection();
    }

}