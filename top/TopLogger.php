<?php

class TopLogger
{

    private $fileHandle;

    public function log($logData)
    {
        if ("" == $logData || array() == $logData) {
            return false;
        }
        if (is_array($logData)) {
            $logData = implode("\t", $logData);
        }
        $logData = $logData . PHP_EOL;
        fwrite($this->getFileHandle(), $logData);
    }

    protected function getFileHandle()
    {
        if (null === $this->fileHandle) {
            if (empty($this->conf["log_file"])) {
                trigger_error("no log file spcified.");
            }
            $logDir = dirname("/bitrix/aliLog.txt");
            if (!is_dir($logDir)) {
                mkdir($logDir, 0777, true);
            }
            $this->fileHandle = fopen("/bitrix/aliLog.txt", "a");
        }
        return $this->fileHandle;
    }
}
