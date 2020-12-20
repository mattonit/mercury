<?php

namespace System;

class Route {

    /**
     * @param $pattern
     * @param $fn
     * @return string
     */
    public static function get($pattern, $fn): string
    {

        $fn();

        return "GET /";
    }
}
