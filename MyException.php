<?php
/**
* 
*/
class MyException extends \Exception
{
	public static function syntaxError($message)
    {
        return new self('[Syntax Error] ' . $message);
    }
}

$exception =  MyException::syntaxError('aaa');
var_dump($exception->getMessage());

