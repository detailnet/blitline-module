# Zend Framework 2 Module for Blitline

## Introduction
This module integrates [Blitline](http://www.blitline.com/) with [Zend Framework 2](https://github.com/zendframework/zf2).

## Requirements
[Zend Framework 2 Skeleton Application](http://www.github.com/zendframework/ZendSkeletonApplication) (or compatible architecture)

## Installation
Install the module through [Composer](http://getcomposer.org/) using the following steps:

  1. `cd my/project/directory`
  
  2. Create a `composer.json` file with following contents (or update your existing file accordingly):

     ```json
     {
         "require": {
             "detailnet/blitline-module": "0.1.*"
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

## Usage
tbd
