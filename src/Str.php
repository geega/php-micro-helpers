<?php

namespace Geega\MicroHelpers;

class Str
{
    /**
     * Check if a string is a boolean
     *
     * @param string $string
     * @return bool
     */
    public static function isBool($string)
    {
        return is_string($string)
            && in_array(strtolower($string), ['true', 'false', '1', '0', 'yes', 'no']);
    }

    /**
     * @param string $string
     * @return bool
     */
    public static function isJson($string)
    {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }

    /**
     * @param string $string
     * @return bool
     */
    public static function isXml($string)
    {
        return is_string($string) && preg_match('/^<\?xml/', $string);
    }

    /**
     * @param string $string
     * @return bool
     */
    public static function isHtml($string)
    {
        return is_string($string) && preg_match('/^<\!DOCTYPE html/', $string);
    }

    /**
     * @param string $string
     * @return bool
     */
    public static function isSerialized($string)
    {
        return is_string($string) && preg_match('/^a:[0-9]+:{/', $string);
    }

    /**
     * @param string $string
     * @return bool
     */
    public static function removeHtmlTags($string)
    {
        return strip_tags($string);
    }
}