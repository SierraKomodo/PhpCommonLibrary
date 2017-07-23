<?php
/**
 * Common PHP library.
 *
 * @author SierraKomodo
 * @license GPL3
 */

namespace SierraKomodo\PhpCommonLibrary;

use Exception;


/**
 * Extension of \Exception to provide predefined 'exception codes' for debugging/error handling purposes
 *
 * This class exists as a base to extend off of. Extensions of this class SHOULD provide a list of error codes as
 *   constants, which SHOULD be used whenever that exception is thrown.
 *
 * @package SierraKomodo\PhpCommonLibrary
 * @version 0.1.0-ALPHA In development.
 */
class PclExceptionWithCode extends Exception
{
    /**
     * @var Integer Exception code; No exception code was provided in the throw statement, or no pre-defined codes match
     *   the scenario
     */
    const ERR_UNDEFINED = -1;
    
    
    /**
     * INILibException constructor.
     *
     * The only difference from Exception::__construct() is the default for parameter $code being set to
     *   self::ERR_UNDEFINED
     *
     * @param string $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct($message = "", $code = self::ERR_UNDEFINED, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
