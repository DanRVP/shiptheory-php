<?php

namespace Shiptheory\Util;

use DateTime;

class Logger
{
    const DEFAULT_LOG_PATH = __DIR__ . '/../../logs/';

    /**
     * @var string
     */
    protected $log_path = self::DEFAULT_LOG_PATH;

    /**
     * @param string $path (optional) A path to a folder you want to store your logs in.
     */
    public function __construct($path = null)
    {
        if (!empty($path)) {
            $this->log_path = $path;
        }
    }

    /**
     * Writes to today's log file.
     * Logs' naming convention is: `YYYY-MM-DD_shiptheory-php.log`
     *
     * @param string $message A string to write to the log file.
     * @param string $title (optional) An optional title. Defaults to `Info`.
     */
    public function log($message, $title = 'Info')
    {
        if (!Environment::loadEnvVariable('LOG_REQUESTS')) {
            return;
        }

        $log = $this->getLogTimeStamp() . " $title: $message\n\n";
        file_put_contents($this->log_path . $this->getLogName(), $log, FILE_APPEND);
    }

    /**
     * Returns a log name based on the convention: `YYYY-MM-DD_shiptheory-php.log`
     *
     * @return string
     */
    protected function getLogName()
    {
        $date = new DateTime();
        return $date->format('Y-m-d') . '_shiptheory-php.log';
    }

    /**
     * Gets a human-readable timestamp formatted like: `Y-m-d H:i:s`.
     *
     * @return string
     */
    protected function getLogTimeStamp()
    {
        $date = new DateTime();
        return $date->format('Y-m-d H:i:s');
    }
}
