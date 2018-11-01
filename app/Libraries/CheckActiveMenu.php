<?php

function menuIsActive($menu, $positions = null)
{
    if (! is_null($positions)) {
        if (is_array($positions)) {
            if (in_array($menu, $positions)) {
                return "in active open";
            }
        }

        if ($menu == $positions) {
            return "in active";
        }
    }

    return "";
}
