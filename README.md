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
composer global require "hirak/prestissimo"
```
```
composer create-project "nullref/yii2-app" --stability=dev --prefer-dist
```

If you use composer.phar as local file, you have to use commands begin with `php composer.phar`

### Usage guide

If you want to add this project to remote repository using PhpStorm, follow next steps

    1. At the end of installing project remove current VCS in composer dialog.
    2. In PhpStorm -> VCS -> Enable Version Control Integration
    3. Add all files to git
    4. VCS -> Commit and Push
    5. Before Push phase define your repository
