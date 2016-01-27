<?php

namespace XLog;

include_once 'Services\UserConfigRetriever.php';
include_once 'File\LogFileInitialiser.php';
include_once 'File\LogFileOutputter.php';
include_once 'Console\ConsoleOutputter.php';

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
