<?php


use PHPUnit\Framework\TestCase;
use Wolgrand\PhpCep\Search;

class SearchTest extends TestCase //ou PHPUnit\Framework\TesteCase

{
    /**
     * @dataProvider dadosTeste
     */
    public function testGetAdressFromZipcodeDefaltUsage()
    {                
        $result = new Search;
        $result = $result->getAdressFromZipcode($input);     

        
        $this->assertEquals($esperado, $result);
        
    }

    public function dadosTeste()
    {

    }
    
}