<?php

namespace XLog;

include_once __DIR__.'\..\Common\Config.php';

class LogFileNameFormatter
{
    private static $LogFormats = ['shortDate'];

    public static function Format($fileName, $logFileFormat)
    {
        switch ($logFileFormat) {
      case 'shortDate':
        $fileName = preg_replace(Config::$LogFormatPattern, date('d-m-Y'), $fileName);
        break;

      default:
        return false;
        break;
    }

        return $fileName;
    }
}
