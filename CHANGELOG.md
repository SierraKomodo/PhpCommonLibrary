# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/) and this project adheres to
[Semantic Versioning](http://semver.org/).

The contents of this changelog are focused on changes to overall behaviour of this library, as relevant to a developer
using its classes. Internal changes that don't affect this behaviour are ommitted, or simply noted as 'Minor internal
changes', 'Minor performance optimizations', etc.

## v1.1.0 - [UNRELEASED]
### Added
 - `PclValidations::class` - Class of common validation based functions
 - `PclValidations::ValidateUrl()` - Validates a string using PHP's `filter_var()` function with the
    `FILTER_VALIDATE_URL` filter and a regex pattern to validate specific protocols.

## v1.0.0 - 2017-07-25
### Added
 - `PclExceptionWithCode::class` - Extension of `\Exception` to provide predefined 'exception codes' for debugging/error
    handling purposes
 - `PclFunctions::class` - Class of common functions used in other PHP projects, designed to be used statically.
 - `PclFunctions::stripExcessSpaces()` - Removes double/triple/etc spaces from a string
 - `PclFunctions::iif()` - Emulates functionality of `$iif()` as it exists in mSL. If `$parCondition` evaluates to
    `true`, return `$parTrue`, otherwise return `$parFalse`
