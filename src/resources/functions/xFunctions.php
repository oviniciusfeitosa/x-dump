<?php
/**
 * @author Vin�cius Feitosa da Silva <viniciusfesil@gmail.com>
 * Date: 22/04/2016
 * Time: 12:54
 */

use Component\xDump\xDump;

if (!function_exists('x')) {

    function x($value) {
        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump($value, $backtrace, FALSE, FALSE);
        $objXDump->output();
    }
}

if (!function_exists('xd_')) {

    function xd_($value) {
        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump($value, $backtrace, TRUE, TRUE);
        $objXDump->output();
    }
}

if (!function_exists('xd')) {

    function xd($value) {
        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump($value, $backtrace, TRUE, FALSE);
        $objXDump->output();
    }
}

if (!function_exists('x_')) {

    function x_($value) {
        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump($value, $backtrace, FALSE, TRUE);
        $objXDump->output();
    }
}
