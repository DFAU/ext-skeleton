# Toujou {{capitalized_projectname}}

@todo add description

## Installation

Require and install the plugin

    $ composer require toujou/{{lowercase_projectname}}
    $ vendor/bin/typo3cms extension:install {{snake_case_projectname}}

## Development

Install php dependencies using composer:

    $ composer install

#### [PHPUnit](https://phpunit.de) Unit tests

    $ etc/scripts/runTests.sh

#### [PHPUnit](https://phpunit.de) Functional tests

    $ etc/scripts/runTests.sh -s functional


#### [Easy-Coding-Standard](https://github.com/Symplify/EasyCodingStandard)

Check coding standard violations

    $ etc/scripts/checkCodingStandards.sh

Fix coding standard violations automatically

    $ etc/scripts/checkCodingStandards.sh --fix
