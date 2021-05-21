<?php

/**
 * This file is part of the guanguans/eii-foundation.
 * This file modified from https://github.com/yiisoft/yii2.
 * (c) guanguans <ityaozm@gmail.com>
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\EiiFoundation\Helpers;

/**
 * BaseStringHelper provides concrete implementation for [[StringHelper]].
 *
 * Do not use BaseStringHelper. Use [[StringHelper]] instead.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @author Alex Makarov <sam@rmcreative.ru>
 *
 * @since 2.0
 */
class StringHelper
{
    /**
     * Safely casts a float to string independent of the current locale.
     *
     * The decimal separator will always be `.`.
     *
     * @param float|int $number a floating point number or integer
     *
     * @return string the string representation of the number
     *
     * @since 2.0.13
     */
    public static function floatToString($number)
    {
        // . and , are the only decimal separators known in ICU data,
        // so its safe to call str_replace here
        return str_replace(',', '.', (string) $number);
    }

    /**
     * Checks if the passed string would match the given shell wildcard pattern.
     * This function emulates [[fnmatch()]], which may be unavailable at certain environment, using PCRE.
     *
     * @param string $pattern the shell wildcard pattern
     * @param string $string  the tested string
     * @param array  $options options for matching. Valid options are:
     *
     * - caseSensitive: bool, whether pattern should be case sensitive. Defaults to `true`.
     * - escape: bool, whether backslash escaping is enabled. Defaults to `true`.
     * - filePath: bool, whether slashes in string only matches slashes in the given pattern. Defaults to `false`.
     *
     * @return bool whether the string matches pattern or not
     *
     * @since 2.0.14
     */
    public static function matchWildcard($pattern, $string, $options = [])
    {
        if ('*' === $pattern && empty($options['filePath'])) {
            return true;
        }

        $replacements = [
            '\\\\\\\\' => '\\\\',
            '\\\\\\*' => '[*]',
            '\\\\\\?' => '[?]',
            '\*' => '.*',
            '\?' => '.',
            '\[\!' => '[^',
            '\[' => '[',
            '\]' => ']',
            '\-' => '-',
        ];

        if (isset($options['escape']) && !$options['escape']) {
            unset($replacements['\\\\\\\\']);
            unset($replacements['\\\\\\*']);
            unset($replacements['\\\\\\?']);
        }

        if (!empty($options['filePath'])) {
            $replacements['\*'] = '[^/\\\\]*';
            $replacements['\?'] = '[^/\\\\]';
        }

        $pattern = strtr(preg_quote($pattern, '#'), $replacements);
        $pattern = '#^' . $pattern . '$#us';

        if (isset($options['caseSensitive']) && !$options['caseSensitive']) {
            $pattern .= 'i';
        }

        return 1 === preg_match($pattern, $string);
    }
}
