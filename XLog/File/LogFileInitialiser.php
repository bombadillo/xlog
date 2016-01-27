<?php

namespace XLog\File;

use XLog\Config;
use XLog\File\LogFileCreator;
use XLog\File\LogFileNameFormatter;

class LogFileInitialiser
{
    public static function Setup($config)
    {
        if ($config->enable == 'false') {
            return;
        }

        $logFileName = $config->location;

        if (preg_match(Config::$LogFormatPattern, $logFileName, $logFileFormat)) {
            $logFileName = LogFileNameFormatter::Format($logFileName, $logFileFormat[1]);
        }

        LogFileCreator::CreateIfNotExists($logFileName);

        return $logFileName;
    }
}
