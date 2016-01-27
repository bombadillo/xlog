<?php

namespace XLog;

include_once __DIR__ . '\..\Services\BacktraceRetriever.php';

use XLog\BacktraceRetriever;

class OutputMessageFormatter
{
    public static function Format($level, $message)
    {
        $backtrace = BacktraceRetriever::Retrieve(debug_backtrace());

        $logItem = sprintf('%s|%s|%s|%s%s', date('Y-m-d H:i:s:u'), strtoupper($level),
                           $backtrace, $message, PHP_EOL);

       return $logItem;
    }
}
