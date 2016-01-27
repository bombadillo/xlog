<?php

namespace XLog;

include_once __DIR__.'\..\Common\Config.php';
include_once __DIR__.'\..\Services\OutputMessageFormatter.php';

class ConsoleOutputter
{
    private static $ColourTerminator;

    public static function Output($level, $message, $userConfig)
    {
        $minLevel = $userConfig->console->minLevel;
        $levelHasPermission = LevelPermissionHandler::CheckIfPermitted($level, $minLevel);

        if ($userConfig->console->enable == 'true' && $levelHasPermission) {
            $levelColour = Config::$LevelColours[$level];
            $logItem = OutputMessageFormatter::Format($level, $message);
            echo $levelColour.$logItem.self::$ColourTerminator;
        }
    }
}
