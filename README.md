[T3v Base]
==========

[![Travis CI Status][Travis CI Status]][Travis CI]

**The base extension of TYPO3voilà.**

Dependencies
------------

* TYPO3 CMS 9.5 or greater
* Grid Elements extension
* SMS Responsive Images extension
* VHS extension
* T3v Core extension
* T3v Translations extension

Installation
------------

1. Add T3v Base as dependency to the [Composer] configuration
2. Run `composer install` or `composer update` to install all dependencies with Composer
3. Include the TypoScript for T3v Base

Content Objects
---------------

* Background Content Object
* Button Content Object
* Copyright Content Object
* Icon Content Object
* Label Content Object
* Link Content Object
* Logo Content Object
* Search Bar Content Object
* Spacer Content Object

Grid Elements
-------------

### Body Grid Elements

* Header Grid Element
* Section Grid Element
* Footer Grid Element

### Layout Grid Elements

* Flexbox Grid Element
* Column Layout Grid Element
* Cascading Layout Grid Element
* Container Grid Element
* Formatting Grid Element

### Composition Grid Elements

* Bar Grid Element
* Block Grid Element
* Flyout Grid Element
* Modal Grid Element

### Other Grid Elements

* Conditionally Grid Element
* Viewport Grid Element

Models
------

* Format Model
* Style Model
* Theme Model

Development
-----------

### Setup

```
$ ./Scripts/Setup.sh
```

### Run Unit Tests

```
$ ./Scripts/Tests/Unit.sh
```

### Run Functional Tests

```
$ ./Scripts/Tests/Functional.sh
```

Bug Reports
-----------

GitHub Issues are used for managing bug reports and feature requests. If you run into issues, please search the issues and submit new
problems [here].

Versioning
----------

This library aims to adhere to [Semantic Versioning 2.0.0]. Violations of this scheme should be reported as bugs. Specifically, if a minor
or patch version is released that breaks backward compatibility, that version should be immediately yanked and / or a new version should be
immediately released that restores compatibility.

Credits
-------

### Icons

* [Agenda icon]
* [Agenda icon (2)]
* [Alignment icon]
* [Background icon]
* [Browser icon]
* [Browser icon (2)]
* [Browser icon (3)]
* [Browser icon (4)]
* [Browser icon (5)]
* [Browser icon (6)]
* [Browser icon (7)]
* [Browser icon (8)]
* [Browser icon (9)]
* [Browser icon (10)]
* [Browser icon (11)]
* [Browser icon (12)]
* [Browser icon (13)]
* [Browser icon (14)]
* [Copyright icon]
* [CSS Icon]
* [Designer icon]
* [Email icon]
* [Link icon]
* [Picture icon]
* [Tag icon]
* [Type icon]

Icons used made by [DinosoftLabs], [Freepik], [Kiranshastry], [Smashicons] and [Vectors Market] from [Flaticon].

License
-------

T3v Base is released under the [MIT License (MIT)], see [LICENSE].

[Acceptance testing TYPO3]: https://wiki.typo3.org/Acceptance_testing "Acceptance testing TYPO3"
[Agenda icon (2)]: https://www.flaticon.com/free-icon/agenda_599169 "Agenda icon"
[Agenda icon]: https://www.flaticon.com/free-icon/agenda_432698 "Agenda icon"
[Alignment icon]: https://www.flaticon.com/free-icon/alignment_140879 "Alignment icon"
[Automated testing TYPO3]: https://wiki.typo3.org/Automated_testing "Automated testing TYPO3"
[Background icon]: https://www.flaticon.com/free-icon/background_186236 "Background icon"
[Browser icon (10)]: https://www.flaticon.com/free-icon/browser_140878 "Browser icon"
[Browser icon (11)]: https://www.flaticon.com/free-icon/browser_140802 "Browser icon"
[Browser icon (12)]: https://www.flaticon.com/free-icon/browser_140803 "Browser icon"
[Browser icon (13)]: https://www.flaticon.com/free-icon/browser_140798 "Browser icon"
[Browser icon (14)]: https://www.flaticon.com/free-icon/browser_140836 "Browser icon"
[Browser icon (2)]: https://www.flaticon.com/free-icon/browser_140796 "Browser icon"
[Browser icon (3)]: https://www.flaticon.com/free-icon/browser_140797 "Browser icon"
[Browser icon (4)]: https://www.flaticon.com/free-icon/browser_140793 "Browser icon"
[Browser icon (5)]: https://www.flaticon.com/free-icon/browser_140803 "Browser icon"
[Browser icon (6)]: https://www.flaticon.com/free-icon/browser_140832 "Browser icon"
[Browser icon (7)]: https://www.flaticon.com/free-icon/browser_140792 "Browser icon"
[Browser icon (8)]: https://www.flaticon.com/free-icon/browser_140842 "Browser icon"
[Browser icon (9)]: https://www.flaticon.com/free-icon/browser_140843 "Browser icon"
[Browser icon]: https://www.flaticon.com/free-icon/browser_140840 "Browser icon"
[Composer]: https://getcomposer.org "Dependency Manager for PHP"
[Copyright icon]: https://www.flaticon.com/free-icon/copyright_594862 "Copyright icon"
[CSS Icon]: https://www.flaticon.com/free-icon/css_1073663 "CSS Icon"
[Designer icon]: https://www.flaticon.com/free-icon/designer_2490457 "Designer icon"
[DinosoftLabs]: https://www.flaticon.com/authors/dinosoftlabs "DinosoftLabs at Flaticon"
[Email icon]: https://www.flaticon.com/free-icon/email_321817 "Email icon"
[Flaticon]: https://www.flaticon.com "Flaticon"
[Freepik]: https://www.flaticon.com/authors/freepik "Freepik  at Flaticon"
[Functional testing TYPO3]: https://wiki.typo3.org/Functional_testing "Functional testing TYPO3"
[here]: https://github.com/t3v/t3v_base/issues "GitHub Issue Tracker"
[Kiranshastry]: https://www.flaticon.com/authors/kiranshastry "Kiranshastry at Flaticon"
[LICENSE]: https://raw.githubusercontent.com/t3v/t3v_base/master/LICENSE "License"
[Link icon]: https://www.flaticon.com/free-icon/link_321834 "Link icon"
[MIT License (MIT)]: http://opensource.org/licenses/MIT "The MIT License (MIT)"
[Picture icon]: https://www.flaticon.com/free-icon/picture_714820 "Picture icon"
[Semantic Versioning 2.0.0]: http://semver.org "Semantic Versioning 2.0.0"
[Smashicons]: https://www.flaticon.com/authors/smashicons "Smashicons at Flaticon"
[T3v Base]: https://t3v.github.io/t3v_base/ "The base extension of TYPO3voilà."
[Tag icon]: https://www.flaticon.com/free-icon/tag_757916 "Tag icon"
[Travis CI]: https://travis-ci.org/t3v/t3v_base "T3v Base at Travis CI"
[Travis CI Status]: https://img.shields.io/travis/t3v/t3v_base.svg?style=flat "Travis CI Status"
[Type icon]: https://www.flaticon.com/free-icon/type_3230756 "Type icon"
[TYPO3voilà]: https://github.com/t3v "“UH LÁLÁ, TYPO3!”"
[Unit Testing TYPO3]: https://wiki.typo3.org/Unit_Testing_TYPO3 "Unit testing TYPO3"
[Vectors Market]: https://www.flaticon.com/authors/vectors-market "Vectors Market at Flaticon"
