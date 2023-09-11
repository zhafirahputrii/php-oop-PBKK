<?php
class User {
    private $username;
    private $password;
//class user berfungsi untuk mengelola pengguna

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }
}
?>
