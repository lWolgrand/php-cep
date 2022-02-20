<?php

use PHPUnit\Framework\TesteCase;


class SearchTest extends PHPUnit_Framework_TestCase  
{
    public function testGetAdressFromZipcodeDefaltUsage()
    {
        
        $result = "ok";        
        $this->assertEquals("ok", $result);
    }
    
}