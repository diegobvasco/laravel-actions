# Changelog

## [1.0.1](https://github.com/diegobvasco/laravel-actions/compare/v1.0.0...v1.0.1) (2026-06-28)


### Miscellaneous Chores

* add support for laravel 13, adjust composer script commands and install rector ([2ae0f0f](https://github.com/diegobvasco/laravel-actions/commit/2ae0f0f3b9c349a81f798d1225a4aff67f54a846))
* run lint ([697521b](https://github.com/diegobvasco/laravel-actions/commit/697521bd5162a37e2f0dd37142385f6df59a1fc4))

## Changelog

All notable changes to `laravel-actions` will be documented in this file.

## Initial Release – v1.0.0 - 2026-01-06

This is the first stable release of **laravel-actions**, a Laravel package created to make it easier to generate *Actions* using a dedicated Artisan command.

### Features

- ✅ `php artisan make:action` command
- ✅ Automatic generation of Action classes
- ✅ Standardized structure for Actions
- ✅ Native integration with Laravel Artisan

### Requirements

- Laravel ^11 | ^12
- PHP >= 8.4

### Package Goal

To simplify and standardize the creation of Actions, reducing boilerplate code and encouraging better organization of business logic in Laravel applications.

### Stability

Starting from version **1.0.0**, the package is considered stable. Breaking changes will only be introduced in major versions, following semantic versioning.

### Getting Started

See the [README](./README.md) for installation instructions and usage examples for the `make:action` command.
