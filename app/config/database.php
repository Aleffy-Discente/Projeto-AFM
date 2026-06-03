<?php

class Database
{
    private string $host = "localhost";
    private string $dbName = "afm";
    private string $user = "root";
    private string $password = "";

    public function connect(): mysqli
    {
        $conn = new mysqli(
            $this->host,
            $this->user,
            $this->password
        );

        if ($conn->connect_error)
        {
            die(
                "Erro MySQL: "
                . $conn->connect_error
            );
        }

        $sql =
        "CREATE DATABASE
        IF NOT EXISTS {$this->dbName}
        CHARACTER SET utf8mb4
        COLLATE utf8mb4_unicode_ci";

        $conn->query($sql);

        $conn->select_db(
            $this->dbName
        );

        return $conn;
    }
}