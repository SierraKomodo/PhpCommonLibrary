<?php
/**
 * Common PHP library.
 *
 * @author SierraKomodo
 * @license GPL3
 */

namespace SierraKomodo\PhpCommonLibrary;


/**
 * Class of common functions used in other PHP projects, designed to be used statically. There should be no need to
 *   instantiate an object of this class.
 *
 * @package SierraKomodo\PhpCommonLibrary
 * @version 0.1.0-ALPHA In development.
 */
class PclFunctions
{
    /**
     * Removes double/triple/etc spaces from a string
     *
     * @param string $parString The string to remove excess spaces from
     * @param bool $parTrim Default: `false`. If `true`, also runs a `trim()` on the string after stripping excess
     *   spaces
     * @return string
     */
    public static function stripExcessSpaces(string $parString, bool $parTrim = false): string
    {
        // Null input should return null
        if ($parString == null) {
            return null;
        }
        
        // Remove duplicate spaces
        while (strpos($parString, '  ') !== false) {
            $parString = str_replace('  ', ' ', $parString);
        }
        
        // Trim
        if ($parTrim === true) {
            $parString = trim($parString);
        }
        
        // Return the modified string
        return $parString;
    }
}
