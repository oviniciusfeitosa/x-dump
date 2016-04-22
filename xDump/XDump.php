<?php
/**
 * @author Vinícius Feitosa da Silva <viniciusfesil@gmail.com>
 * Date: 22/04/2016
 * Time: 13:09
 */

namespace Component\xDump\xDump;

class XDump {

    const OUTPUT_MODE_HTML = 0;
    const OUTPUT_MODE_CLI = 1;

    private $value;
    private $arrBacktrace;
    private $willStop;
    private $hasDetails;
    private $outputMode;

    public function __construct(
        $value
        , $arrBacktrace
        , $willStop = FALSE
        , $hasDetails = FALSE
        , $outputMode = XDump::OUTPUT_MODE_HTML
    ) {
        $this->value = $value;
        $this->arrBacktrace = $arrBacktrace;
        $this->willStop = $willStop;
        $this->hasDetails = $hasDetails;
        $this->outputMode = $outputMode;
    }

    public function output() {
        switch ($this->outputMode) {
            case XDump::OUTPUT_MODE_HTML:
                $this->outputAsHTML();
                break;
            case XDump::OUTPUT_MODE_CLI:
                 # @todo: Implement this one.
                break;
        }
        if($this->willStop) {
            die;
        }
    }

    private function outputAsHTML() {
        echo '<div style="text-align:left">';
        echo '<pre>';
        echo '<div style="background:lightgray; color:black;">';

        foreach($this->arrBacktrace[0]['args'] as $index => $value) {
            echo "<div style='border: 1px solid black'>[Value " . ($index + 1) . "]</div>";
            echo "<div style='background:black; color:white; border: 1px solid black'>";
            if($this->hasDetails) {
                var_dump($value);
            } else {
                print_r($value);
            }
            echo '</div>';
        }

        foreach($this->arrBacktrace as $backtrace) {
            echo "<div style='background:brown; color:white; border: 1px solid black'>[Line] {$backtrace['line']} [File] {$backtrace['file']}</div>";
            echo "<div style='background:black; color:white; border: 1px solid black'> > {$backtrace['function']}</div>";
        }

        echo '</div>';
        echo '</pre>';
        echo '</div>';

    }
}