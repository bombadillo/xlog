# XLog
A simple PHP Logger

## Requirements
* PHP >= 5.3
* [Composer](https://getcomposer.org/)

## TODO
* Add [Composer](https://getcomposer.org) support __done__
* Comply with PSR-3

## Installation

* Copy XLog folder to a location where you can reference it.
* Add reference in your application e.g. ```PHP include_once 'XLog\Logger.php'```
* Edit log file location in config

## Usage

```PHP
include_once 'XLog\Logger.php';

use XLog\Logger;

$logger = new Logger();

$logger->log('trace', 'Trace to log');
```

## Config
The config file must be named `XLog.config`. Within the config file you can set options for the log file and console output.

### Log File

* `location` The path and filename of the log file.
* `minLevel` The minimum log level allowed. E.g. if set to `warn` only `warn`, `error`, and `fatal` will be output.
* `enable` Should be set to `'true'`/`'false'`. Determines whether the log file should be output to.

### Console
* `minLevel` The minimum log level allowed. E.g. if set to `warn` only `warn`, `error`, and `fatal` will be output.
* `enable` Should be set to `'true'`/`'false'`. Determines whether the console should be output to.

## Log Levels
Available levels are:

* fatal
* error
* warn
* info
* debug
* trace
