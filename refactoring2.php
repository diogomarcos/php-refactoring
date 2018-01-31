<?php

class MyUserClass
{
    public function getUserList()
    {
        $server_name = 'localhost';
        $user_name = 'user';
        $password = 'password';
        $db_name = 'dbuser';

        try {
            $conn = new PDO("mysql:host=$server_name;dbname=$db_name", $user_name, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->query("SELECT `name` FROM use ORDER BY `name`");
            $results = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            return $results;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}