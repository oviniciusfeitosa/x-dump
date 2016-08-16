<?php

/**
 * @author Vin�cius Feitosa da Silva <viniciusfesil@gmail.com>
 * Date: 22/04/2016
 * Time: 13:35
 */

use Component\xDump\Test;

class HTMLOutputDumperTest extends PHPUnit_Framework_TestCase {
    public function testXFunction() {
        ob_start();
        x(1);
        $content = ob_get_contents();
        ob_end_clean();
        $this->assertNotNull($content, "xd function not working.");
    }

    public function testX_Function() {
        ob_start();
        x_(1);
        $content = ob_get_contents();
        ob_end_clean();
        $this->assertNotNull($content, "xd function not working.");
    }
}