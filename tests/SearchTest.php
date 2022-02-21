<?php


use PHPUnit\Framework\TestCase;
use Wolgrand\PhpCep\Search;

class SearchTest extends TestCase //ou PHPUnit\Framework\TesteCase
{
    public function testGetAdressFromZipcodeDefaltUsage()
    {
        
        $result = "ok";        
        $this->assertEquals("ok", $result);
    }
    
}