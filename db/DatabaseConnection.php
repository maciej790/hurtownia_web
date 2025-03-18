<?php

class DatabaseConnection
{
    public $pdo;

    // Konstruktor inicjujący połączenie z bazą danych
    public function __construct()
    {
        // Dane do połączenia z lokalną bazą danych
        $host = "localhost";
        $dbname = "hurtownia";
        $user = "root";
        $password = ""; // Domyślnie w XAMPP MySQL hasło jest puste, zmień jeśli używasz innego środowiska

        // Tworzenie DSN (Data Source Name) dla MySQL
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

        try {
            // Inicjalizujemy połączenie PDO w momencie tworzenia obiektu
            $this->pdo = new PDO($dsn, $user, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new PDOException("Nie udało się połączyć z bazą danych: " . $e->getMessage());
        }
    }
}
