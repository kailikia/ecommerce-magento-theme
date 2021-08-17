<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Codazon\ThemeLayoutPro\Helper;

/**
 * Widget Conditions helper
 */
class SerializedConditions
{
    /**
     * Encode widget conditions to be used with WYSIWIG
     *
     * @param array $value
     * @return string
     */
    public function encode(array $value)
    {
        $value = str_replace(['{', '}', '"', '\\'], ['[', ']', '`', '|'], serialize($value));
        return $value;
    }

    /**
     * Decode previously encoded widget conditions
     *
     * @param string $value
     * @return array
     */
    public function decode($value)
    {
        $value = str_replace(['[', ']', '`', '|'], ['{', '}', '"', '\\'], $value);
        $value = unserialize($value);
        return $value;
    }
}
