Site Analyzer
=============
 
[![MIT License](https://img.shields.io/packagist/l/cocur/slugify.svg)](http://opensource.org/licenses/MIT)
[![Latest Release](https://img.shields.io/packagist/v/cocur/slugify.svg)](https://packagist.org/packages/rdorado/site-analyzer)
[![Scrutinizer Quality Score](https://img.shields.io/scrutinizer/g/cocur/slugify.svg?style=flat)](https://scrutinizer-ci.com/g/cocur/slugify/)
[![Code Coverage](https://scrutinizer-ci.com/g/cocur/slugify/badges/coverage.png?b=master&style=flat-square)](https://scrutinizer-ci.com/g/cocur/slugify/?branch=master)

Site Dynamics Analyzer is php-based tool to analyse the dynamics of a web site.

Features
--------

- Page counter/analysis
- Report of pages per User 
- PSR-4 compatible.


Installation
------------

You can install SiteAnalyzer through [Composer](https://getcomposer.org):

```shell
$ composer require rdorado/site-analyzer
```

Or modify your composer.json requirements:

```json
    "require": {
        "monolog/monolog": "1.0.*",
        "rdorado/site-analyzer": "^0.0.1"
    }
```
and then update your project:

```shell
$ composer update
```

Usage
-----

Count all the views/pages you want to observe by importing the ```SiteAnalyzer``` class and then using the ```count``` static method:

```php
use SiteAnalyzer\SiteAnalyzer;

SiteAnalyzer::count();
```

You can also include other options to be stored on the database. That depends on the kind of reportings or analyzis you want to perform:

```php
$options = ['id' = $myid];
SiteAnalyzer::count($options);
```

Reporting/Displaying the stored information
===========================================

Once you have started to count the page hits, different sort of reports can be displayed. For example, a very basic report is the number of hits per page stored on the database:

```php 
$data = SiteAnalyzer::getStats();
print( SiteAnalyzer::transform($data, "html") );
``` 

<!---
## Other features:

### Example 2: time analysis
$data = SiteAnalyzer::getStats();
print( SiteAnalyzer::transform($data, "html") );

### Example 3: user analysis
$data = SiteAnalyzer::getStats();
print( SiteAnalyzer::transform($data, "html") );


### Path Analytics

###  Example 4: math matrix
$data = SiteAnalyzer::getStats();
print( SiteAnalyzer::transform($data, "html") );

### Example 5: a/b test</h2>");
$data = SiteAnalyzer::getStats();
print( SiteAnalyzer::transform($data, "html") );

### Profile Analyisis
### Example 6: User profile
$data = SiteAnalyzer::getStats();
print( SiteAnalyzer::transform($data, "html") );
### Example 7: User-Time profile
$data = SiteAnalyzer::getStats();
print( SiteAnalyzer::transform($data, "html") );

### Page profiling
$data = SiteAnalyzer::getStats();
print( SiteAnalyzer::transform($data, "html") );

-->







