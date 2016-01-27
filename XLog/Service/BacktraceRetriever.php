<?php

namespace XLog\Service;

class BacktraceRetriever
{
    public static function Retrieve($backtrace)
    {
        if (count($backtrace) == 3) {
            return self::GetFileNameOfCallingScript($backtrace);
        }

        $backtrace = array_slice($backtrace, 3, count($backtrace));

        $formattedBacktrace = '';

        foreach ($backtrace as $backtrace) {
            $formattedBacktrace .= sprintf('%s.%s -> ', $backtrace['class'], $backtrace['function']);
        }

        $formattedBacktrace = substr($formattedBacktrace, 0, strlen($formattedBacktrace) - 4);

        return $formattedBacktrace;
    }

    private static function GetFileNameOfCallingScript($backtrace)
    {
        return basename($backtrace[2]['file']);
    }
}
