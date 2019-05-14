<?php

class Account
{
    private $errorArray;

    public function __construct()
    {
        $this->errorArray = array();
    }

    public function register($un, $fn, $ln, $em, $em2, $pw, $pw2)
    {
        $this->validateUsername($un);
        $this->validateFirstName($fn);
        $this->validateLastName($ln);
        $this->validateEmails($em, $em2);
        $this->validatePasswords($pw, $pw2);

        if(empty($this->errorArray) == true) {
            //Insert into db
            return true;
        }
        else {
            return false;
        }
	}


    private function validateUsername($un)
    {

    }

    private function validateFirstName($fn)
    {

    }

    private function validateLastName($ln)
    {

    }

    private function validateEmails($em, $em2)
    {

    }

    private function validatePasswords($pw, $pw2)
    {

    }
}
