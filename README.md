# Yii2 Boilerplate
Yet another [Yii2](http://www.yiiframework.com/) application skeleton =)

## DIRECTORY STRUCTURE

```
src/ 				source code
vendors				3rd-party packages
runtime/            contains files generated during runtime
tests/              contains various tests for the basic application
web/				the entry script and Web resources
```

## REQUIREMENTS

The minimum requirement by this project template that your Web server supports PHP 5.4.0.

## INSTALL

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

```
composer global require "fxp/composer-asset-plugin:~1.0.0"
composer create-project "nullref/yii2-app" --stability=dev
```

If you use composer.phar as local file, you have to use commands begin with `php composer.phar`
