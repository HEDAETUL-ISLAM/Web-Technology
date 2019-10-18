<?php
class Login
{
    private $id;
    private $passwords;

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setPasswords($passwords)
    {
        $this->passwords = $passwords;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getPasswords()
    {
        return $this->passwords;
    }
    public function Login($id, $passwords)
    {
        $this->id = $id;
        $this->passwords = $passwords;
    }
}
