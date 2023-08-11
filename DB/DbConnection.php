<?php

class DbConnection
{
    private $connection;

    public function __construct()
    {
        $env = parse_ini_file('.env');

        $host = $env['HOST'];
        $dbname = $env['DBNAME'];
        $username = $env['USERNAME'];
        $password = $env['PASSWORD'];



        $option = [
            PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];


        try {
  
            $this->connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, $option);
            $this->connection->exec("SET CHARACTER SET UTF8");

        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }

    public function closeConnection(){
        
    }
}


?>