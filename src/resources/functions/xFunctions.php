<?php
/**
 * @author Vinicius Feitosa da Silva <viniciusfesil@gmail.com>
 * Date: 22/04/2016
 * Time: 12:54
 */

use Component\xDump\xDump;

if (!function_exists('x')) {

    function x($value, $isShowBacktract = true, $outputMode = XDump::OUTPUT_MODE_HTML) {

        $backtrace = array();
        if(!$isShowBacktract) {
            $backtrace = debug_backtrace();
        }
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace,
            false,
            false,
            $outputMode
        );
        $objXDump->output();
    }
}

if (!function_exists('xd_')) {

    function xd_($value, $isShowBacktract = true, $outputMode = XDump::OUTPUT_MODE_HTML) {

        $backtrace = array();
        if(!$isShowBacktract) {
            $backtrace = debug_backtrace();
        }
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace,
            true,
            true,
            $outputMode
        );
        $objXDump->output();
    }
}

if (!function_exists('xd')) {

    function xd($value, $isShowBacktract = true, $outputMode = XDump::OUTPUT_MODE_HTML) {
        $backtrace = array();
        if(!$isShowBacktract) {
            $backtrace = debug_backtrace();
        }
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace,
            true,
            false,
            $outputMode
        );
        $objXDump->output();
    }
}

if (!function_exists('x_')) {

    function x_($value, $isShowBacktract = true, $outputMode = XDump::OUTPUT_MODE_HTML) {
        $backtrace = array();
        if(!$isShowBacktract) {
            $backtrace = debug_backtrace();
        }
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace,
            false,
            true,
            $outputMode
        );
        $objXDump->output();
    }
}
