<?php
class Auth extends DatabaseConnection
{
    public $user = null;
    public $message = null;

    public function auth($login, $password)
    {
        if (!$login || !$password) {
            return $this->message = 'Uzupełnij wszystkie pola!';
        }

        parent::__construct();

        $sql = "SELECT * FROM users WHERE login = :login AND haslo = :password";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':login' => $login,
            ':password' => $password
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$result) {
            return $this->message = 'Błędny login lub hasło!';
        } else {
            $this->user = [
                'id' => $result['id'],
                'login' => $result['login'],
                'rola' => $result['rola']
            ];
            createSession('user', $this->user);
            return $this->user;
            $this->message = null;
        }
    }

    public function logOut()
    {
        destroySession('user');
    }
}
