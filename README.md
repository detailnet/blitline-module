# Zend Framework Module for Blitline

[![Build Status](https://travis-ci.org/detailnet/blitline-module.svg?branch=master)](https://travis-ci.org/detailnet/blitline-module)
[![Coverage Status](https://img.shields.io/coveralls/detailnet/blitline-module.svg)](https://coveralls.io/r/detailnet/blitline-module)
[![Latest Stable Version](https://poser.pugx.org/detailnet/blitline-module/v/stable.svg)](https://packagist.org/packages/detailnet/blitline-module)
[![Latest Unstable Version](https://poser.pugx.org/detailnet/blitline-module/v/unstable.svg)](https://packagist.org/packages/detailnet/blitline-module)

## Introduction
This module integrates [Blitline](http://www.blitline.com/) with [Zend Framework](https://github.com/zendframework/zendframework).

## Requirements
[Zend Framework Skeleton Application](http://www.github.com/zendframework/ZendSkeletonApplication) (or compatible architecture)

## Installation
Install the module through [Composer](http://getcomposer.org/) using the following steps:

  1. `cd my/project/directory`
  
  2. Create a `composer.json` file with following contents (or update your existing file accordingly):

     ```json
     {
         "require": {
             "detailnet/blitline-module": "^1.0"
         }
     }
     ```
  3. Install Composer via `curl -s http://getcomposer.org/installer | php` (on Windows, download
     the [installer](http://getcomposer.org/installer) and execute it with PHP)
     
  4. Run `php composer.phar self-update`
     
  5. Run `php composer.phar install`
  
  6. Open `configs/application.config.php` and add following key to your `modules`:

     ```php
     'Detail\Blitline',
     ```

  7. Copy `vendor/detailnet/blitline-module/config/blitline.local.php.dist` into your application's
     `config/autoload` directory, rename it to `blitline.local.php` and make the appropriate changes.
