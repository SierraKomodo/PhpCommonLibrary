<?php

namespace SierraKomodo\PhpCommonLibrary;

/**
 * Class of functions designed specifically for validation of specific types of values
 *
 * @package SierraKomodo\PhpCommonLibrary
 * @version 1.1.0 Adds validation functions
 */
class PclValidations
{
    /**
     * Validates a string using PHP's `filter_var()` function with the `FILTER_VALIDATE_URL` filter and a regex pattern
     *      to validate specific protocols.
     *
     * @param string $parString The string to validate
     * @param [int] $parFilterFlags Array of filter flags for `FILTER_VALIDATE_URL`. Valid options are as defined here
     *      for your current PHP version: http://php.net/manual/en/filter.filters.validate.php - Empty arrays use your
     *      PHP version's default flags. Defaults to an empty array.
     * @param [string] $parAllowedProtocols Array of regex pieces for comparing against the URL's protocol. Defaults to
     *      `['https?']` which allows `http://` and `https://` - Set to `['.*']` to allow any protocol.
     * @return bool True if validation checks passed, otherwise false
     */
    public static function validateUrl(string $parString, array $parFilterFlags = array(), array $parAllowedProtocols = ['https?']): bool
    {
        // Check filter_var() result
        if (filter_var($parString, FILTER_VALIDATE_URL) === false) {
            return false;
        }
        
        // Verify allowed protocols match
        if (!empty($parAllowedProtocols)) {
            // Generate regex pattern - /^(protocol)|(protocol):\/\/.*$/i
            foreach ($parAllowedProtocols as $key => $value) {
                $parAllowedProtocols[$key] = "({$value})";
            }
            $regex = '/^' . implode("|", $parAllowedProtocols) . ":\/\/.*$/i";
            
            // Compare against regex pattern - No match (`0`) or error (`null`) should both be considered an invalid URL
            if (preg_match($regex, $parString) !== 1) {
                return false;
            }
        }
        
        // If all above checks passed, return true
        return true;
    }
}
