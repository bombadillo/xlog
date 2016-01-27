<?php

include_once 'XLog\Logger.php';

use XLog\Logger;

class Foo
{
  public static function bar()
  {
    $logger = new Logger();

    $logger->log('error', 'Trace to log in bar');
  }
}

class BasicTest
{
  public static function go()
  {
    $logger = new Logger();

    $logger->log('info', 'Trace to log in go');

    Foo::bar();
  }
}


$logger = new Logger();

$logger->log('trace', 'Trace to log in base script');

BasicTest::go();
