xDump
=====

## About


The xDump component provides a simple and effective way of knowing which one or more reported values represent, with HTML Output. Basically represented by the functions "x", "x_", "xd" and "xd_", the component provides that the files that were covered so that the application reaches the function.

## Install

Require x-dump cli
```console
composer require "vinnyfs89/x-dump":"dev-master"
```

Or clone this project directly or set in your composer.json, like this:

```json
  "require-dev": {
    "vinnyfs89/x-dump": "dev-master"
  },
```
## How to use?

The functions `x` and `xd` differ because the "x" does not prevent the execution of the application, since the "xd" stop the application. But both do not make the details of one or more informed values.

```php
x($param1 [, $param2, ...])
xd($param1 [, $param2, ...])
```

The functions `x_()` and `xd_()` do the same `x()` and `xd()` respectively, but make the details of one or more informed values using "var_dump" behind the scenes.

```php
x_ ($param1 [, $param2, ...])
xd_ ($param1 [, $param2, ...])
```

Enjoy!
:D
