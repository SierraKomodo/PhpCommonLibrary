<?php
/**
 * Common PHP library.
 *
 * @author SierraKomodo
 * @license GPL3
 */

namespace SierraKomodo\PhpCommonLibrary;


/**
 * Extension of \Exception to provide predefined 'exception codes' for debugging/error handling purposes
 *
 * Exceptions from `Functions` SHOULD use this class and provide one of the predefined error codes, and a
 *   programmer-friendly error message. Error codes are meant to allow a try/catch block to handle errors, while
 *   messages can provide specific information in logs for debugging and bug fixing.
 *
 * @package SierraKomodo\PhpCommonLibrary
 * @version 1.0.0 First full release
 */
class PclFunctionsException extends PclExceptionWithCode
{

}
