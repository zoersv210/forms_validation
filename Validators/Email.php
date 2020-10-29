<?php

namespace Validators;

class Email extends AbstractValidator{
    public function isValid($value)
    {
        if( preg_match('/\w+(\.\w+)*@\D((?:[\w]+\.)+)([a-zA-Z]{2,4})/',$value) == 0){
            $this->setError("Invalid Email.");
            return false;
        }
        return true;
    }
} 