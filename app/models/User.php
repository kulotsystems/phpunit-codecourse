<?php

namespace App\Models;

class User
{

    protected $first_name;
    protected $last_name;
    protected $email;

    public function setFirstName($first_name)
    {
        $this->first_name = trim($first_name);
    }

    public function getFirstName()
    {
        return $this->first_name;
    }


    public function setLastName($last_name)
    {
        $this->last_name = trim($last_name);
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }


    public function setEmail($email)
    {
        $this->email = trim($email);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getEmailVariables()
    {
        return [
            'full_name' => $this->getFullName(),
            'email'     => $this->getEmail()
        ];
    }

}