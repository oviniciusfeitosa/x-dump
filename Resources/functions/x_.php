<?php
/**
 * @author Vinícius Feitosa da Silva <viniciusfesil@gmail.com>
 * Date: 22/04/2016
 * Time: 12:54
 */

use Component\xDump\xDump;

if (!function_exists('x_')) {

    function x_($value) {
        $backtrace = debug_backtrace();
        $objXDump = new xDump\XDump($value, $backtrace, FALSE, TRUE);
        $objXDump->output();
    }
}
