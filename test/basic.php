<?php

include_once 'XLog\Logger.php';

use XLog\Logger;

$logger = new Logger();

$logger->log('trace', 'Trace to log');
