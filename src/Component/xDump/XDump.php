<?php

namespace Component\xDump;

class XDump
{
    const OUTPUT_MODE_HTML = 0;
    const OUTPUT_MODE_CLI = 1;

    private $value;
    private $arrBacktrace;
    public $hasExecutionStopped = false;
    public $hasDetails = false;
    public $hasBacktraceShowed = true;
    public $outputMode = XDump::OUTPUT_MODE_HTML;

    public function __construct($value, $arrBacktrace)
    {
        $this->value = $value;
        $this->arrBacktrace = $arrBacktrace;
    }

    public function output()
    {
        switch ($this->outputMode) {
            case self::OUTPUT_MODE_HTML:
                echo $this->outputAsHTML();
                break;
            case self::OUTPUT_MODE_CLI:
                echo $this->outputAsCLI();
                break;
        }
        if ($this->hasExecutionStopped) {
            die;
        }
    }

    private function _showContent($index, $value)
    {
        $content = "<div style='border: 1px solid black'>[Value " . ($index + 1) . "]</div>";
        $content .= "<div style='background:black; color:white; border: 1px solid black'>";
        ob_start();
        if ($this->hasDetails) {
            var_dump($value);
        } else {
            print_r($value);
        }
        $content .= ob_get_contents();
        ob_end_clean();
        $content .= '</div>';

        return $content;
    }

    private function outputAsHTML()
    {
        $dump = '<pre>';
        $dump .= '<div style="background:lightgray; color:black;">';

        foreach ($this->arrBacktrace[0]['args'] as $index => $value) {
            $dump .= $this->_showContent($index, $value);
        }

        if ($this->hasBacktraceShowed) {
            foreach ($this->arrBacktrace as $backtrace) {
                if (!empty($backtrace['line']) && !empty($backtrace['line']) && !empty($backtrace['line'])) {
                    $dump .= "<div style='background:brown; color:white; border: 1px solid black'>[Line] {$backtrace['line']} {$backtrace['file']}</div>";
                    $dump .= "<code style='background:black; color:white; border: 1px solid black'>{$backtrace['function']}</code>";
                }
            }
        }

        $dump .= '</pre>';

        return $dump;
    }

    private function outputAsCLI()
    {
        $dump = '\n ==================================';
        $spaces = '    ';
        foreach ($this->arrBacktrace[0]['args'] as $index => $value) {
            $dump .= "\n {$spaces} '---> [Value " . ($index + 1) . " \n\n ";
            ob_start();
            if ($this->hasDetails) {
                var_dump($value);
            } else {
                print_r($value);
            }
            $dump .= "\n ";
            $dump .= ob_get_contents();
            $dump .= "\n ";
            ob_end_clean();
            $dump .= "\n {$spaces} ---------------";
        }

        if ($this->hasBacktraceShowed) {
            $dump .= "\n {$spaces} '-> [ BACKTRACE ] ---------------";
            foreach ($this->arrBacktrace as $backtrace) {
                $line = isset($backtrace['line']) ? $backtrace['line'] : "";
                $file = isset($backtrace['file']) ? $backtrace['file'] : "";
                $dump .= "\n {$spaces} '---> [Line: {$line}] [File: {$file}]";
                $dump .= "\n {$spaces} '------->  {$backtrace['function']}";
            }
        }
        $dump .= '\n ==================================';

        return $dump;
    }
}
