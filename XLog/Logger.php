<?php

namespace XLog;

use XLog\Console\ConsoleOutputter;
use XLog\Service\UserConfigRetriever;
use XLog\File\LogFileInitialiser;
use XLog\File\LogFileOutputter;

class Logger
{
    private $LogFile;
    private $Config;

    public function __construct()
    {
        $this->Config = UserConfigRetriever::Get();
        $this->LogFile = LogFileInitialiser::Setup($this->Config->logFile);
    }

    public function Log($level, $message)
    {
        ConsoleOutputter::Output($level, $message, $this->Config);
        LogFileOutputter::Output($this->LogFile, $level, $message, $this->Config);
    }
}
