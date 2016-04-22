<?php
/**
 * @author Vinícius Feitosa da Silva <viniciusfesil@gmail.com>
 * Date: 22/04/2016
 * Time: 12:54
 */

use Component\xDump\xDump;

if (!function_exists('x')) {

    function x($value) {
        $backtrace = debug_backtrace();
        $objXDump = new xDump\GenericXDump($value, $backtrace, FALSE, FALSE);
        $objXDump->debug();
    }
}
