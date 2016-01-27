<?php

namespace XLog;

include_once 'LogFileNameFormatter.php';
include_once 'LogFileCreator.php';
include_once __DIR__.'\..\Common\Config.php';

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
