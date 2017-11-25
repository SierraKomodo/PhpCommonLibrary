<?php

namespace SierraKomodo\PhpCommonLibrary\Tests;

use PHPUnit\Framework\TestCase;
use SierraKomodo\PhpCommonLibrary\PclFunctions;

class PclFunctionsTest extends TestCase
{
    public function testIifReturnsTrueOutput()
    {
        self::assertEquals(true, PclFunctions::iif('somestring', true, false));
        self::assertEquals(true, PclFunctions::iif(5, true, false));
        self::assertEquals(true, PclFunctions::iif(true, true, false));
        self::assertEquals(true, PclFunctions::iif(empty($undefined), true, false));
    }
    
    
    public function testIifReturnsFalseOutput()
    {
        $defined = 1;
        
        self::assertEquals(false, PclFunctions::iif('', true, false));
        self::assertEquals(false, PclFunctions::iif(0, true, false));
        self::assertEquals(false, PclFunctions::iif(false, true, false));
        self::assertEquals(false, PclFunctions::iif(empty($defined), true, false));
    }
    
    
    public function testIifReturnsTrueOutputStrict()
    {
        self::assertEquals(true, PclFunctions::iif(true, true, false, true));
        self::assertEquals(true, PclFunctions::iif(empty($undefined), true, false, true));
    }
    
    
    public function testIifReturnsFalseOutputStrict()
    {
        self::assertEquals(false, PclFunctions::iif('somestring', true, false, true));
        self::assertEquals(false, PclFunctions::iif(5, true, false, true));
    }
    
    
    public function testStripExcessSpacesRemovesChainOfSpaces()
    {
        $testString = "Test            string";
        $resultString = "Test string";
        
        self::assertEquals($resultString, PclFunctions::stripExcessSpaces($testString));
    }
    
    
    public function testStripExcessSpacesTrim()
    {
        $testString = "Test            string  \r\n";
        $resultString = "Test string";
        
        self::assertEquals($resultString, PclFunctions::stripExcessSpaces($testString, true));
    }
    
    
    public function testStripExcessSpacesDoesNotTrimByDefault()
    {
        $testString = "Test            string  \r\n";
        $resultString = "Test string \r\n";
        
        self::assertEquals($resultString, PclFunctions::stripExcessSpaces($testString));
    }
    
    
    public function testIifWikiExamples()
    {
        // Example #1 - Checking if a number is even or odd
        self::assertEquals('even', PclFunctions::iif(32 % 2 == 0, 'even', 'odd'));
        self::assertEquals('odd', PclFunctions::iif(33 % 2 == 0, 'even', 'odd'));
        
        // Example #2 - Strict condition checking
        self::assertTrue(PclFunctions::iif(1, true, false));
        self::assertFalse(PclFunctions::iif(1, true, false, true));
    }
    
    
    public function testStripExcessSpacesExamples()
    {
        // Example #1 - Cleaning excess spaces from a user input
        $string = '  This is   a string  ';
        self::assertEquals(' This is a string ', PclFunctions::stripExcessSpaces($string));
        self::assertEquals('This is a string', PclFunctions::stripExcessSpaces($string, true));
    }
}
