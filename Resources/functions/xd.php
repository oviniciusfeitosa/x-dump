<?php
/**
 * @author Vin�cius Feitosa da Silva <viniciusfesil@gmail.com>
 * Date: 22/04/2016
 * Time: 12:54
 */

use Component\xDump\xDump;

if (!function_exists('xd')) {

    function xd($value) {
        $backtrace = debug_backtrace();
        $objXDump = new xDump\XDump($value, $backtrace, TRUE, FALSE);
        $objXDump->output();
    }
}
