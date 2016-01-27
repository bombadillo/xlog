<?php

namespace XLog\Service;

use XLog\Service\BacktraceRetriever;

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
