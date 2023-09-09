<?php

namespace Model;

class User
{
    public string $username;
    public string $password;
    public Thread $thread;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }
}
