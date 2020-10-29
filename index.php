<?php

function __autoload($className) {
    $parts = explode('\\', $className);
    $className = implode('/',$parts);
    if(is_file($className . '.php')){
        include $className . '.php';
    }else{
        throw new Exception("Cant find {$className}");
    }
}

$form = new \Forms\TestForm();
$form->addField('email', 'email');
$form->addField('name', 's_name');
$form->addField('name', 'f_name');
$form->email->addValidateRule(['validator'=>'notEmpty']);

$form->email = "zoer210@gmail.com";
$form->s_name = "Yashchuk";
$form->f_name = "Serhii";

$form->submit();