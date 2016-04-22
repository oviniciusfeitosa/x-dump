<?php
/**
 * @author Vinícius Feitosa da Silva <viniciusfesil@gmail.com>
 * Date: 22/04/2016
 * Time: 12:54
 */

use Component\xDump\xDump;

if (!function_exists('xd_')) {

    function xd_($value) {
        $backtrace = debug_backtrace();
        $objXDump = new xDump\XDump($value, $backtrace, TRUE, TRUE);
        $objXDump->output();
    }
}
