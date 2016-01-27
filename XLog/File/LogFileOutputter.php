<?php

namespace XLog;

include_once __DIR__.'\..\Services\LevelPermissionHandler.php';
include_once __DIR__.'\..\Services\OutputMessageFormatter.php';

class LogFileOutputter
{
    public static function Output($logFile, $level, $message, $userConfig)
    {
        $minLevel = $userConfig->logFile->minLevel;
        $levelHasPermission = LevelPermissionHandler::CheckIfPermitted($level, $minLevel);

        if ($userConfig->logFile->enable == 'true' && $levelHasPermission) {
            $logItem = OutputMessageFormatter::Format($level, $message);

            file_put_contents($logFile, $logItem, FILE_APPEND);
        }
    }
}
