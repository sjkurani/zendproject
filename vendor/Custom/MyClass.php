<?php

namespace Zend\Custom;


class MyClass extends Exception{

    public function setMessage($message){
        $this->message = $message;
    }

}

$error = new Error('blah');

$error->setMessage('changed');

throw $error;