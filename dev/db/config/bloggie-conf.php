<?php
// This file generated by Propel 1.6.7 convert-conf target
// from XML runtime conf file C:\workspace\bloggie\dev\db\runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'bloggie' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'dsn' => 'mysql:host=localhost;dbname=bloggie',
        'user' => 'root',
        'password' => '123456',
      ),
    ),
    'default' => 'bloggie',
  ),
  'generator_version' => '1.6.7',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-bloggie-conf.php');
return $conf;