<?php
/**
 * Created by PhpStorm.
 * User: sierr
 * Date: 7/23/2017
 * Time: 2:02 PM
 */

namespace SierraKomodo\PhpCommon\Tests;

use PHPUnit\Framework\TestCase;
use SierraKomodo\PhpCommonLibrary\PclExceptionWithCode;


class PclExceptionWithCodeTest extends TestCase
{
    public function testExceptionDefaultsToUndefinedError()
    {
        self::expectException(PclExceptionWithCode::class);
        self::expectExceptionCode(PclExceptionWithCode::ERR_UNDEFINED);
        
        throw new PclExceptionWithCode();
    }
}
