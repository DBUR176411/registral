<?php
class Dbconection
{
    private $host = "localhost";
    private $db = "registrar";

    private $username = "root";
    private $password = "";
    public function connect()
    {
        try {
            $pdo = new pdo("mysql:" . $this->host . ";dbname:" . $this->db, $this->username, $this->password);

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("ERROR: Could not connect. " . $e->getMessage());
        }
    }
}