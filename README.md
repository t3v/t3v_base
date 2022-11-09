[T3v Base]
==========

**The base extension of [TYPO3voilà].**

Overview
--------

### Content objects

* Background
* Button
* Copyright
* Icon
* Label
* Link
* Logo
* Search bar
* Spacer

### Grid elements *

#### Body

* Header grid element
* Section grid element
* Footer grid element

#### Layout

* Column layout grid element
* Flexbox grid element
* Cascading layout grid element
* Container grid element
* Block grid element

#### Formatting

* Formatting grid element

#### Composition

* Bar grid element
* Flyout grid element
* Modal grid element

#### Misc

* Conditionally grid element
* Viewport grid element

### Models

* Address model
* Country model
* Country group model
* Email address model
* Format model
* Phone number model
* Property model
* Region model
* Style model
* Theme model

Dependencies
------------

* TYPO3 CMS 10.4 or greater
* Container extension *
* Gridelements extension *
* Picture extension
* SMS Responsive Images extension
* VHS extension
* T3v Core extension
* T3v Translations extension

Installation
------------

1. Add T3v Base as dependency to the [Composer] configuration
2. Run `composer install` or `composer update` to install all dependencies with Composer
3. Include the TypoScript for T3v Base

Development
-----------

### Setup

```sh
git clone https://github.com/t3v/t3v_base.git && cd t3v_base

./Scripts/Setup.sh
```

### Testing

```sh
./Scripts/Tests.sh
./Scripts/Tests/Unit.sh
./Scripts/Tests/Functional.sh
./Scripts/Tests/Migrate.sh
```

Bug Reports
-----------

GitHub Issues are used for managing bug reports and feature requests. If you run into issues, please search the issues and submit new
problems [here].

Versioning
----------

This project aims to adhere to [Semantic Versioning 2.0.0]. Violations of this scheme should be reported as bugs. Specifically, if a minor
or patch version is being released that breaks backward compatibility, that version should be immediately yanked and / or a new version
should be immediately released that restores compatibility.

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
* [CSS Icon]
* [Copyright icon]
* [Designer icon]
* [Email icon]
* [Link icon]
* [Picture icon]
* [Search Engine icon]
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
[CSS Icon]: https://www.flaticon.com/free-icon/css_1073663 "CSS Icon"
[Composer]: https://getcomposer.org "Dependency Manager for PHP"
[Copyright icon]: https://www.flaticon.com/free-icon/copyright_594862 "Copyright icon"
[Designer icon]: https://www.flaticon.com/free-icon/designer_2490457 "Designer icon"
[DinosoftLabs]: https://www.flaticon.com/authors/dinosoftlabs "DinosoftLabs at Flaticon"
[Email icon]: https://www.flaticon.com/free-icon/email_321817 "Email icon"
[Flaticon]: https://www.flaticon.com "Flaticon"
[Freepik]: https://www.flaticon.com/authors/freepik "Freepik  at Flaticon"
[Functional testing TYPO3]: https://wiki.typo3.org/Functional_testing "Functional testing TYPO3"
[Kiranshastry]: https://www.flaticon.com/authors/kiranshastry "Kiranshastry at Flaticon"
[LICENSE]: https://raw.githubusercontent.com/t3v/t3v_base/master/LICENSE "License"
[Link icon]: https://www.flaticon.com/free-icon/link_321834 "Link icon"
[MIT License (MIT)]: http://opensource.org/licenses/MIT "The MIT License (MIT)"
[Picture icon]: https://www.flaticon.com/free-icon/picture_714820 "Picture icon"
[Search Engine icon]: https://www.flaticon.com/free-icon/search-engine_140789 "Search Engine icon"
[Semantic Versioning 2.0.0]: http://semver.org "Semantic Versioning 2.0.0"
[Smashicons]: https://www.flaticon.com/authors/smashicons "Smashicons at Flaticon"
[T3v Base]: https://t3v.github.io/t3v_base/ "The base extension of TYPO3voilà."
[TYPO3voilà]: https://github.com/t3v "“UH LÁLÁ, TYPO3!”"
[Tag icon]: https://www.flaticon.com/free-icon/tag_757916 "Tag icon"
[Type icon]: https://www.flaticon.com/free-icon/type_3230756 "Type icon"
[Unit Testing TYPO3]: https://wiki.typo3.org/Unit_Testing_TYPO3 "Unit testing TYPO3"
[Vectors Market]: https://www.flaticon.com/authors/vectors-market "Vectors Market at Flaticon"
[here]: https://github.com/t3v/t3v_base/issues "GitHub Issue Tracker"
