<?php

namespace SierraKomodo\PhpCommonLibrary\Tests;

use PHPUnit\Framework\TestCase;
use SierraKomodo\PhpCommonLibrary\PclFunctions;


class PclFunctionsTest extends TestCase
{
    public function testStripExcessSpacesRemovesChainOfSpaces()
    {
        $testString   = "Test            string";
        $resultString = "Test string";
        
        self::assertEquals($resultString, PclFunctions::stripExcessSpaces($testString));
    }
    
    
    public function testStripExcessSpacesTrim()
    {
        $testString   = "Test            string  \r\n";
        $resultString = "Test string";
        
        self::assertEquals($resultString, PclFunctions::stripExcessSpaces($testString, true));
    }
    
    
    public function testStripExcessSpacesDoesNotTrimByDefault()
    {
        $testString   = "Test            string  \r\n";
        $resultString = "Test string \r\n";
        
        self::assertEquals($resultString, PclFunctions::stripExcessSpaces($testString));
    }
}
