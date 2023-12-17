<?php
declare(strict_types=1);

namespace Iuu\MonologTimeZone;

use DateTimeZone;

class Logger extends \Hyperf\Logger\Logger
{

    public function __construct(string $name, array $handlers = [], array $processors = [], ?DateTimeZone $timezone = null)
    {
        parent::__construct($name, $handlers, $processors, $timezone ?? new \DateTimeZone('Asia/Shanghai'));
        $this->useLoggingLoopDetection(false);
    }
}