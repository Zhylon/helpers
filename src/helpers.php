<?php

/**
 * @param string|null $format
 * @return string
 */
function __zhylon_site_build($format = null)
{
    try {
        $dir = __DIR__;
        $matches = [];

        if (preg_match('/releases\/(\d{14})/', $dir, $matches)) {
            if(!empty($matches[1] && strlen($matches[1]) == 14 && is_numeric($matches[1]))) {
                if($format) {
                    return date($format, strtotime($matches[1]));
                }
                return $matches[1];
            }
        }
    } catch (\Exception $exception) {
    }

    return '';
}
