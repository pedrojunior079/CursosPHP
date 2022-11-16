<?php

class User
{
    public $firstName;
    public $lastName;
    public $email;

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = filter_var($firstName);
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = filter_var($lastName);
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Valida o e-mail do usuário em um formato válido!
     *
     * @param [type] $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }
}
