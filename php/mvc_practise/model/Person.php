<?php
class Person
{
    private $firstName;
    private $email;
    private $passwords;

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPasswords($passwords)
    {
        $this->passwords = $passwords;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPasswords()
    {
        return $this->passwords;
    }
    public function Person($firstName, $email, $passwords)
    {
        $this->firstName = $firstName;
        $this->email = $email;
        $this->passwords = $passwords;
    }

}
