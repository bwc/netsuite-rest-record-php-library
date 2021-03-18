<?php
declare(strict_types=1);

class Formatter
{
    /**
     * "An example string" to
     *      ($isVariable "$anExampleString")
     *      or (!$isVariable "anExampleString")
     *
     * @param string $str
     * @param bool $isVariable
     * @return string
     */
    public static function formatCamelCase($str, $isVariable = false)
    {
        return sprintf(
            '%s%s',
            $isVariable ? '$' : '',
            str_replace(
                ' ',
                '',
                lcfirst(
                    ucwords(
                        str_replace(['-', ':', PHP_EOL], ' ', $str)
                    )
                )
            )
        );
    }

    /**
     * "class name" to "NSRecord_ClassName"
     *
     * @param string $str
     * @param string $classPrefix
     * @return string
     */
    public static function formatClassName($str, $classPrefix = '')
    {
        return sprintf(
            '%s%s',
            $classPrefix,
            str_replace(
                ' ',
                '',
                ucwords(
                    str_replace(['_', '-'], ' ', $str)
                )
            )
        );
    }

    /**
     * Parse variable types from documentation into php names
     *
     * @var string $rawType
     * @var string $classPrefix
     * @var string $format
     */
    public static function parseTypes($rawType, $classPrefix = '', $format = '')
    {
        $knownTypesMap = [
            'integer' => 'int',
            'boolean' => 'bool',
            'string' => 'string',
            'double' => 'float',
            '_number' => [
                '' => 'numeric',
                '(double)' => 'float',
                '(float)' => 'float',
            ],
            '_int' => [
                '(int64)' => 'int',
            ]
        ];
        if (isset($knownTypesMap['_' . $rawType][$format])) {
            return $knownTypesMap['_' . $rawType][$format];
        }
        if ($rawType === 'number' || $rawType === 'int') {
            throw new NetsuiteException("Unexpected number value with format: $format");
        }
        if (isset($knownTypesMap[$rawType])) {
            return $knownTypesMap[$rawType];
        }

        if (strpos($rawType, 'one of') !== false) {
            $rawTypes = explode(',', str_replace(['one of:', '[', ']'], '', $rawType));
            $types = [];
            foreach ($rawTypes as $raw) {
                $types[] = self::formatClassName(
                    str_replace(
                        PHP_EOL, '', trim($raw)
                    ),
                    $classPrefix
                );
            }
            return implode('|', $types);
        }

        return self::formatClassName($rawType, $classPrefix);
    }

    /**
     * Generates 4 space tabs
     *
     * @param int $repeat
     * @return string
     */
    public static function tab($repeat = 1)
    {
        return str_repeat(str_repeat(' ', 4), $repeat);
    }
}
