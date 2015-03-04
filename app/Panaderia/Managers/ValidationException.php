<?php namespace Panaderia\Managers;

class ValidationException extends \Exception
{
    protected $errors;
    
    public function __construct($menssage, $errors)
    {
        $this->errors = $errors;
        parent::__construct($menssage);
    }
    
    public function getErrors()
    {
        return $this->errors;
    }
    
}