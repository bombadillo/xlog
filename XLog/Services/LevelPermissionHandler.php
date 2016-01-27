<?php

namespace XLog;

include_once __DIR__ . '\..\Common\Config.php';

use XLog\Config;

class LevelPermissionHandler
{
  public static function CheckIfPermitted($level, $minLevel)
  {
    $minLevelIndex = array_search($minLevel, Config::$Levels);
    $levelIndex = array_search($level, Config::$Levels);

    return $levelIndex <= $minLevelIndex;
  }
}
