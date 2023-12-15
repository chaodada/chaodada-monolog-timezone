<?php
declare(strict_types=1);

namespace ZenStudio\LineFormatter;

class LineFormatter extends \Monolog\Formatter\LineFormatter
{
    public function __construct(
        ?string $format = null,
        ?string $dateFormat = null,
        bool    $allowInlineLineBreaks = false,
        bool    $ignoreEmptyContextAndExtra = false,
        bool    $includeStacktraces = false,
        int     $maxNormalizeDepth = 20
    )
    {
        parent::__construct($format, $dateFormat, $allowInlineLineBreaks, $ignoreEmptyContextAndExtra, $includeStacktraces);
        //设置json的序列化深度
        parent::setMaxNormalizeDepth($maxNormalizeDepth);
    }
}