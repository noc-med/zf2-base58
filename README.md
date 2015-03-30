Zf2Base58
============================


Installation
------------
For the installation uses composer [composer](http://getcomposer.org "composer - package manager").
Add this project in your composer.json:


    "require": {
        "noc-med/zf2-base58": "dev-master"
    }


Examples
=====================================
Default use of SEO Url
------------
```php
$base58 = $this->getServiceLocator()->get('ZfBase58');
echo $base58->encode(1523523532532532532);
echo $base58->decode("F429fgds");
```


Contributors
=====================================

Semih SARI - semih.sari@noc.com.tr