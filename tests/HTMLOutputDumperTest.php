<?php

use PHPUnit\Framework\TestCase;

class HTMLOutputDumperTest extends TestCase
{

    public function testXFunctionsWorking()
    {
        ob_start();
        x(1);
        $content = ob_get_contents();
        ob_end_clean();
        $this->assertNotEmpty($content, "xd function not working.");
    }

    public function testX_FunctionWorking()
    {
        ob_start();
        x_(1);
        $content = ob_get_contents();
        ob_end_clean();
        $this->assertNotEmpty($content, "xd function not working.");
    }
}
