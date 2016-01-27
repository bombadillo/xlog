<?php

namespace XLog\Service;

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
