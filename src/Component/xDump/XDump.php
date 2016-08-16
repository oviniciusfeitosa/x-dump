<?php
/**
 * @author Vin�cius Feitosa da Silva <viniciusfesil@gmail.com>
 * Date: 22/04/2016
 * Time: 13:09
 */

namespace Component\xDump;

class XDump
{

    const OUTPUT_MODE_HTML = 0;
    const OUTPUT_MODE_CLI = 1;

    private $value;
    private $arrBacktrace;
    private $willStop;
    private $hasDetails;
    private $outputMode;
    private $dump;

    public function __construct(
        $value
        , $arrBacktrace
        , $willStop = FALSE
        , $hasDetails = FALSE
        , $outputMode = XDump::OUTPUT_MODE_HTML
    )
    {
        $this->value = $value;
        $this->arrBacktrace = $arrBacktrace;
        $this->willStop = $willStop;
        $this->hasDetails = $hasDetails;
        $this->outputMode = $outputMode;

        $this->fillDump();
    }

    public function output()
    {
        switch ($this->outputMode) {
            case XDump::OUTPUT_MODE_HTML:
                $this->outputAsHTML();
                break;
            case XDump::OUTPUT_MODE_CLI:
                # @todo: Implement this one.
                break;
        }
        if ($this->willStop) {
            die;
        }
    }

    private function fillDump() {
        $this->dump = '<div style="text-align:left">';
        $this->dump .= '<pre>';
        $this->dump .= '<div style="background:lightgray; color:black;">';

        foreach ($this->arrBacktrace[0]['args'] as $index => $value) {
            $this->dump .= "<div style='border: 1px solid black'>[Value " . ($index + 1) . "]</div>";
            $this->dump .= "<div style='background:black; color:white; border: 1px solid black'>";
            ob_start();
            if ($this->hasDetails) {
                var_dump($value);
            } else {
                print_r($value);
            }
            $this->dump .= ob_get_contents();
            ob_end_clean();
            $this->dump .= '</div>';
        }

        foreach ($this->arrBacktrace as $backtrace) {
            $line = isset($backtrace['line']) ? $backtrace['line'] : "";
            $file = isset($backtrace['file']) ? $backtrace['file'] : "";
            $this->dump .= "<div style='background:brown; color:white; border: 1px solid black'>[Line] {$line} {$file}</div>";
            $this->dump .= "<div style='background:black; color:white; border: 1px solid black'> {$backtrace['function']}</div>";
        }
    }

    public function getDump() {
        return $this->dump;
    }

    private function outputAsHTML()
    {
        echo $this->dump;
    }
}