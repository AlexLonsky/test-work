<?php

class Db
{
    public static function getConnection ()
    {
        $host = 'localhost';
        $db = 'codevery';
        $user = 'root';
        $pass = '';
        $options = array(
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass, $options);
        return $pdo;
    }
}