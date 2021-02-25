<?php

if (!function_exists('x')) {

    function x($value)
    {
        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace
        );
        $objXDump->hasExecutionStopped = false;
        $objXDump->hasDetails = false;
        $objXDump->hasBacktraceShowed = true;
        $objXDump->outputMode = \Component\xDump\XDump::OUTPUT_MODE_HTML;
        $objXDump->output();
    }
}

if (!function_exists('xnb')) {

    function xnb($value)
    {
        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace
        );
        $objXDump->hasExecutionStopped = false;
        $objXDump->hasDetails = false;
        $objXDump->hasBacktraceShowed = false;
        $objXDump->outputMode = \Component\xDump\XDump::OUTPUT_MODE_HTML;
        $objXDump->output();
    }
}

if (!function_exists('xd_')) {

    function xd_($value)
    {

        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace,
            true,
            true
        );
        $objXDump->hasExecutionStopped = true;
        $objXDump->hasDetails = true;
        $objXDump->hasBacktraceShowed = true;
        $objXDump->outputMode = \Component\xDump\XDump::OUTPUT_MODE_HTML;
        $objXDump->output();
    }
}

if (!function_exists('xdnb_')) {

    function xdnb_($value)
    {

        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace,
            true,
            true,
            false
        );
        $objXDump->hasExecutionStopped = true;
        $objXDump->hasDetails = true;
        $objXDump->hasBacktraceShowed = false;
        $objXDump->outputMode = \Component\xDump\XDump::OUTPUT_MODE_HTML;
        $objXDump->output();
    }
}

if (!function_exists('xd')) {

    function xd($value, $outputMode = 0)
    {

        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace
        );
        $objXDump->hasExecutionStopped = true;
        $objXDump->hasDetails = false;
        $objXDump->hasBacktraceShowed = true;
        $objXDump->outputMode = \Component\xDump\XDump::OUTPUT_MODE_HTML;
        $objXDump->output();
    }
}

if (!function_exists('xdnb')) {

    function xdnb($value)
    {

        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace
        );
        $objXDump->hasExecutionStopped = true;
        $objXDump->hasDetails = false;
        $objXDump->hasBacktraceShowed = false;
        $objXDump->outputMode = \Component\xDump\XDump::OUTPUT_MODE_HTML;
        $objXDump->output();
    }
}

if (!function_exists('x_')) {

    function x_($value)
    {
        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace
        );
        $objXDump->hasExecutionStopped = false;
        $objXDump->hasDetails = true;
        $objXDump->hasBacktraceShowed = true;
        $objXDump->outputMode = \Component\xDump\XDump::OUTPUT_MODE_HTML;
        $objXDump->output();
    }
}

if (!function_exists('xnb_')) {

    function xnb_($value)
    {
        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace
        );
        $objXDump->hasExecutionStopped = false;
        $objXDump->hasDetails = true;
        $objXDump->hasBacktraceShowed = false;
        $objXDump->outputMode = \Component\xDump\XDump::OUTPUT_MODE_HTML;
        $objXDump->output();
    }
}

if (!function_exists('xcli')) {

    function xcli($value)
    {
        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace
        );
        $objXDump->hasExecutionStopped = false;
        $objXDump->hasDetails = false;
        $objXDump->hasBacktraceShowed = true;
        $objXDump->outputMode = \Component\xDump\XDump::OUTPUT_MODE_CLI;
        $objXDump->output();
    }
}

if (!function_exists('xnbcli')) {

    function xnbcli($value)
    {
        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace
        );
        $objXDump->hasExecutionStopped = false;
        $objXDump->hasDetails = false;
        $objXDump->hasBacktraceShowed = false;
        $objXDump->outputMode = \Component\xDump\XDump::OUTPUT_MODE_CLI;
        $objXDump->output();
    }
}

if (!function_exists('xdcli_')) {

    function xdcli_($value)
    {

        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace
        );
        $objXDump->hasExecutionStopped = true;
        $objXDump->hasDetails = true;
        $objXDump->hasBacktraceShowed = true;
        $objXDump->outputMode = \Component\xDump\XDump::OUTPUT_MODE_CLI;
        $objXDump->output();
    }
}

if (!function_exists('xdnbcli_')) {

    function xdnbcli_($value)
    {

        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace
        );
        $objXDump->hasExecutionStopped = true;
        $objXDump->hasDetails = true;
        $objXDump->hasBacktraceShowed = false;
        $objXDump->outputMode = \Component\xDump\XDump::OUTPUT_MODE_CLI;
        $objXDump->output();
    }
}

if (!function_exists('xdcli')) {

    function xdcli($value)
    {

        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace
        );
        $objXDump->hasExecutionStopped = true;
        $objXDump->hasDetails = false;
        $objXDump->hasBacktraceShowed = true;
        $objXDump->outputMode = \Component\xDump\XDump::OUTPUT_MODE_CLI;
        $objXDump->output();
    }
}

if (!function_exists('xdnbcli')) {

    function xdnbcli($value)
    {

        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace
        );
        $objXDump->hasExecutionStopped = true;
        $objXDump->hasDetails = false;
        $objXDump->hasBacktraceShowed = false;
        $objXDump->outputMode = \Component\xDump\XDump::OUTPUT_MODE_CLI;
        $objXDump->output();
    }
}

if (!function_exists('xcli_')) {

    function xcli_($value)
    {
        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace
        );
        $objXDump->hasExecutionStopped = false;
        $objXDump->hasDetails = true;
        $objXDump->hasBacktraceShowed = true;
        $objXDump->outputMode = \Component\xDump\XDump::OUTPUT_MODE_CLI;
        $objXDump->output();
    }
}

if (!function_exists('xnbcli_')) {

    function xnbcli_($value)
    {
        $backtrace = debug_backtrace();
        $objXDump = new \Component\xDump\XDump(
            $value,
            $backtrace
        );
        $objXDump->hasExecutionStopped = false;
        $objXDump->hasDetails = true;
        $objXDump->hasBacktraceShowed = false;
        $objXDump->outputMode = \Component\xDump\XDump::OUTPUT_MODE_CLI;
        $objXDump->output();
    }
}
