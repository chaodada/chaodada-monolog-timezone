<?php
declare(strict_types=1);

namespace ZenStudio\LineFormatter;

class JsonFormatter extends \Monolog\Formatter\JsonFormatter
{
    public function __construct(
        int $batchMode = self::BATCH_MODE_JSON,
        bool $appendNewline = true,
        bool $ignoreEmptyContextAndExtra = false,
        bool $includeStacktraces = false,
        int $maxNormalizeDepth = 20
    )
    {
        parent::__construct($batchMode, $appendNewline, $ignoreEmptyContextAndExtra, $ignoreEmptyContextAndExtra,$includeStacktraces);
        //设置json的序列化深度
        parent::setMaxNormalizeDepth($maxNormalizeDepth);
    }
}