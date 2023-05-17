<?php

function cutStr($str, $start, $end)
{
    if (strpos($str, '<p>') !== false) {
        $str = substr($str, 3, strlen($str) - 7);
    }
    if ($end >= 0 && $end <= strlen($str)) {
        $spacePosition = strpos($str, ' ', $end);
        if ($spacePosition !== false) {
            return substr($str, $start, $spacePosition);
        } else {
            return $str;
        }
    }

    return $str;
}
