# VO MagicField Bridge

A bridge to make stratdes/vo work with saasformation/magic-field

## Installation

Use composer to require the library:

```bash
composer require saasformation/vo-magic-field-bridge
```

## Getting started

Once installed, from VOField you can use the following methods:

```php
$uuidv1 = (new VOField('f9fb8670-ff7d-4086-b1a2-2cd8b2403ad1'))->uuidv1(); // Single/UUIDV1
$name = (new VOField('John'))->name(); // Single/Name
$description = (new VOField('This is a description'))->description(); // Single/Description
```

## Issues

If you find some issue in the library, please feel free to open an issue here on Github.
