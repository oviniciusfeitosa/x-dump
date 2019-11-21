![thumb-image](./src/x-dump-logo-192x192.png)

x-dump
=====

**x-dump** means E**x**treme-**D**ump. With this repository you can debug your **PHP** code allowing you to have all the traceability where it was passed, enabling you to do it quickly and effectively.

Functions like `x` and `xd` are provided, for example to make debugging your code easier
by the functions , the component provides that the files that were covered so that the application reaches the function.

## About

This code was created by members of the [PHP-DF](https://phpdf.org.br) community and is open for contributions.

## Install

To have x-dump installed run the command below

```console
composer require vinnyfs89/x-dump
```

### Alternative installation

You can also clone this project directly or set in your `composer.json`, like this:

```json
  "require-dev": {
    "vinnyfs89/x-dump": "dev-master"
  }
```

## How to use?

The functions `x` and `xd` differ because the "x" does not prevent the execution of the application, since the "xd" stop the application. But both do not make the details of one or more informed values.

```php
x($param1 [, $param2, ...])
xd($param1 [, $param2, ...])
```

The functions `x_()` and `xd_()` do the same `x()` and `xd()` respectively, but make the details of one or more informed values using "var_dump" behind the scenes.

```php
x_ $param1 [, $param2, ...])
xd_($param1 [, $param2, ...])
```

:octocat: :smiley: :zap:

### References
- [PHP-DF](https://phpdf.org.br)
- [CMC](https://github.com/devbrotherhood/cmc)
- [debug_backtrace](https://www.php.net/manual/pt_BR/function.debug-backtrace.php)
- [PHP](http://php.net)
