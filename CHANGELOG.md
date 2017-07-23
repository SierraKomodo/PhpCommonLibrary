# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/) and this project adheres to [Semantic Versioning](http://semver.org/).

The contents of this changelog are focused on changes to overall behaviour of this library, as relevant to a developer using its classes. Internal changes that don't affect this behaviour are ommitted, or simply noted as 'Minor internal changes', 'Minor performance optimizations', etc.

## [UNRELEASED]
### Added
 - `PclExceptionWithCode::class` - Extension of `\Exception` to provide predefined 'exception codes' for debugging/error handling purposes
 - `PclFunctions::class` - Class of common functions used in other PHP projects, designed to be used statically.
 - `PclFunctions::stripExcessSpaces()` - Removes double/triple/etc spaces from a string
