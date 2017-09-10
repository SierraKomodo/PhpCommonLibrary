<?php

namespace SierraKomodo\PhpCommonLibrary\Tests;

use PHPUnit\Framework\TestCase;
use SierraKomodo\PhpCommonLibrary\PclValidations;

class PclValidationsTest extends TestCase
{
    public function testValidateUrlAllowsValidAddress()
    {
        self::assertTrue(PclValidations::validateUrl("http://example.com"));
        self::assertTrue(PclValidations::validateUrl("https://example.com"));
        self::assertTrue(PclValidations::validateUrl("http://example.com/directory"));
        self::assertTrue(PclValidations::validateUrl("http://example.com/directory/file.html"));
    }
    
    public function testValidateUrlAllowsCustomProtocols()
    {
        self::assertTrue(PclValidations::validateUrl("ftp://example.com", array(), array('ftp')));
        self::assertFalse(PclValidations::validateUrl("http://example.com", array(), array('ftp')));
    }
    
    public function testValidateUrlRejectsInvalidStrings()
    {
        self::assertFalse(PclValidations::validateUrl("not-a-url.com"));
        self::assertFalse(PclValidations::validateUrl("badprotocol://example.com"));
    }
}
