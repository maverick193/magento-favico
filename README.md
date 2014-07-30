Magento Favico Extension
========================
This is a magento extension which allows you to display customers cart's quantity in your favicon :

![Magento Favico Extension](https://cloud.githubusercontent.com/assets/1863000/3712313/20d925b6-150c-11e4-9774-c861d192787a.png)

Requirements
============

- Install PHP Composer, see bellow
- Allow the use of symlinks in Magento Backend :

  System->Configuration->Developer->Template Settings ->"Allow Symlinks"
  There no security risk by allowing symlinks in Magento

Installation
============
### 1. Install PHP-Composer :
Download it into your project :
```
$ curl -sS https://getcomposer.org/installer | php
```
This will just check a few PHP settings and then download composer.phar to your working directory.

If you are not familiar with composer, please read the composer documentations on [getcomposer](http://getcomposer.org) website

### 2. Create/Update your root composer.json :
```json
{
    "name": "Your Project Name",
    "require": {
        "maverick/magento-favico": "*",
        "magento-hackathon/magento-composer-installer": "*"
    },
    "repositories": [
        {
            "type": "vcs",
            "url": "git://github.com/maverick193/magento-favico.git"
        },
        {
            "type": "vcs",
            "url": "git://github.com/magento-hackathon/magento-composer-installer.git"
        }
    ],
    "extra":{
        "magento-root-dir": "htodcs/"
    }
}
```
- Update the "magento-root-dir" node (specify your Magento root folder "web/", "./", ...)
- The "magento-composer-installer" will install the module (via symlinks) in Magento folder structure, more information on [magento-composer-installer](https://github.com/magento-hackathon/magento-composer-installer)

### 3. Install the extension via composer :
```
php composer.phar install
```
### 4. Move layout and template folders (if needed) :
Depending on your magento installation E.E or C.E, you may need to move the layout XML and template folder to your [package]/[design] folder, default installation puts them in base/default in order to make it work for all Magento versions, example :
```
If you are using the enterprise version and have a custom design called "custom" 
under a custom package called "mypackage" you need to move or copy : 

1. layout XML folder
from /app/design/frontend/base/default/layout/cecropia 
to app/design/frontend/mypackage/custom/layout/cecropia

2. Template folder
from /app/design/frontend/base/default/template/cecropia
to /app/design/frontend/mypackage/custom/layout/cecropia
```
Usage
=====
In Backend, go to System -> Configuration -> Favicon Notification and enable it
You can customize type of animation, position, background color and text color favicon badge :

![Magento Favico Extension](https://cloud.githubusercontent.com/assets/1863000/3712314/27a920b2-150c-11e4-9784-1839200fcd98.png)

Support and Contribution
========================
If you have any issues with this extension, please open an issue on Github.

Any contributions are highly appreciated. If you want to contribute, please open [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

Copyright and License
=====================
License   : [OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php).

Copyright : (c) 2014 Mohammed NAHHAS
