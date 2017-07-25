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
 * @version 1.0.0 First full release
 */
class PclFunctions
{
    /**
     * Emulates functionality of `$iif()` as it exists in mSL. If `$parCondition` evaluates to `true`, return `$parTrue`,
     *   otherwise return `$parFalse`
     *
     * @param mixed $parCondition The condition to check
     * @param mixed $parTrue Default: `null`. The output if `$parCondition` evaluates to `true`
     * @param mixed $parFalse Default: `null`. The output if `$parCondition` evaluates to `false`
     * @param bool $parStrict Default: `false`. If set to `true`, strict comparisons (`=== true` vs `== true`) will be
     *   used
     * @return mixed `$parTrue` or `$parFalse`
     */
    public static function iif($parCondition, $parTrue = null, $parFalse = null, bool $parStrict = false)
    {
        if ($parStrict === true) {
            if ($parCondition === true) {
                return $parTrue;
            } else {
                return $parFalse;
            }
        } else {
            if ($parCondition) {
                return $parTrue;
            } else {
                return $parFalse;
            }
        }
    }
    
    
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
