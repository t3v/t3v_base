CHANGELOG
=========

Notable changes will be documented in this file. The project adheres to [Semantic Versioning].

3.1.0
-----

* Load page TSconfig for container or grid elements based on extension loaded
* Renamed `Containers` to `ContainerElements`
* Added more view helpers from VHS
* Modified and overridden `ConvertViewHelper` to use default values if empty and not only null
* Added TypoScript bundles for container or grid elements
* Updated Composer configuration
* Updated dependencies

3.0.0
-----

* Moved `Variable/String/DefaultViewHelper` to `Variable/DefaultViewHelper` (breaking change)
* Removed `gridelements` as dependency, the corresponding provider extension should decide (breaking change)
* Begin migration from `gridelements` to `container` extension (breaking change)
* Dropped support for TYPO3 9.5 (breaking change)
* Dropped support for PHP < 7.4 (breaking change)
* Updated Travis CI configuration
* Dropped support for AppVeyor

2.0.0
-----

* Removed T3v DataMapper extension as dependency
* Removed `PageLanguageOverlayForm` data provider (breaking change)
* Dropped support for TYPO3 8.x (breaking change)
* Dropped support for PHP < 7.2 (breaking change)
* PSR-12: Extended Coding Style
* Updated dependencies
* Updated Travis CI and AppVeyor configuration

1.0.0
-----

* Added `PageForm` and `PageLanguageOverlayForm` data provider
* Added common files

[Semantic Versioning]: http://semver.org "Semantic Versioning"
