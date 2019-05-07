# Enrichment Progress
This is a package that contains custom data type that allows to monitor enrichment progress of objects.
This is an internal Divante project 
([read more](https://divante.atlassian.net/wiki/spaces/KPWP/pages/805208115/Enrichment+Progress)).

**Table of Contents**

- [Enrichment Progress](#enrichment-progress)
	- [Compatibility](#compatibility)
	- [Installation](#installation)
	- [Contributing](#contributing)
    - [Licensing](#licensing)
    - [Standards & Code Quality](#standards-code-quality)
    - [About Authors](#about-authors)
    
## Compatibility
Pimcore 5.5 and higher.

## Installation
```
composer require divante-ltd/pimcore-enrichment-progress
```

Enable the Bundle:
```bash
./bin/console pimcore:bundle:enable DivanteEnrichmentProgressBundle
```

## Testing
Unit Tests:
```bash
PIMCORE_TEST_DB_DSN="mysql://username:password@localhost/pimcore_test" \
    vendor/bin/phpunit
```

Functional Tests:
```bash
PIMCORE_TEST_DB_DSN="mysql://username:password@localhost/pimcore_test" \
    vendor/bin/codecept run -c tests/codeception.dist.yml
```

## Contributing
If you'd like to contribute, please fork the repository and use a feature branch. Pull requests are warmly welcome.

## Standards & Code Quality
This module respects all Pimcore 5 code quality rules and our own PHPCS and PHPMD rulesets.

## About Authors
![Divante-logo](http://divante.co/logo-HG.png "Divante")

We are a Software House from Europe, existing from 2008 and employing about 150 people. Our core competencies are built 
around Magento, Pimcore and bespoke software projects (we love Symfony3, Node.js, Angular, React, Vue.js). 
We specialize in sophisticated integration projects trying to connect hardcore IT with good product design and UX.

We work for Clients like INTERSPORT, ING, Odlo, Onderdelenwinkel and CDP, the company that produced The Witcher game. 
We develop two projects: [Open Loyalty](http://www.openloyalty.io/ "Open Loyalty") - an open source loyalty program 
and [Vue.js Storefront](https://github.com/DivanteLtd/vue-storefront "Vue.js Storefront").

We are part of the OEX Group which is listed on the Warsaw Stock Exchange. Our annual revenue has been growing at a 
minimum of about 30% year on year.

Visit our website [Divante.co](https://divante.co/ "Divante.co") for more information.