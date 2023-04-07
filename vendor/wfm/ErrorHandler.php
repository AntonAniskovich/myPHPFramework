<?php

namespace wfm;

class ErrorHandler
{

    public function __construct(){
        if(DEBUG){
            error_reporting(-1);
        } else{
            error_reporting(0);
        }
        set_exception_handler([$this, 'exceptionHandler']);
        set_error_handler([$this, 'errorHandler']);
    }

    public function exceptionHandler(\Throwable $e){
        $this->logError($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayError('Исключение', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
    }

    protected function logError($message = '', $file = '', $line = ''){
        file_put_contents(LOGS . '/errors.log', "[" . date('Y-m-d H:i:s') . "] Текст ошибки: {$message} | Файл: {$file} | Строка: {$line}\n==================\n", FILE_APPEND );
    }

    protected function displayError($errno, $errstr, $errfile, $errline, $responce = 500){
        if($responce == 0){
            $responce = 404;
        }
        http_response_code($responce);
        if($responce == 404 && !DEBUG){
            require WWWW . '/errors/404.php';
            die;
        }
        if(DEBUG){
            require WWWW . '/errors/development.php';
        } else{
            require WWWW . '/errors/production.php';
        }
        die;
    }

}