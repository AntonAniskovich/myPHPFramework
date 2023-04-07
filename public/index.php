<?php

if (PHP_MAJOR_VERSION < 8) die('Необходима версия PHP 8 или более');

require_once dirname(__DIR__) . '/config/init.php';

new \wfm\App();
