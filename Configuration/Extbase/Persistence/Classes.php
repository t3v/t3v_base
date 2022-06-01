<?php
declare(strict_types=1);

use T3v\T3vBase\Domain\Model\Address;
use T3v\T3vBase\Domain\Model\Country;
use T3v\T3vBase\Domain\Model\CountryGroup;
use T3v\T3vBase\Domain\Model\EmailAddress;
use T3v\T3vBase\Domain\Model\Format;
use T3v\T3vBase\Domain\Model\PhoneNumber;
use T3v\T3vBase\Domain\Model\Property;
use T3v\T3vBase\Domain\Model\Region;
use T3v\T3vBase\Domain\Model\Style;
use T3v\T3vBase\Domain\Model\Theme;

/**
 * The Extbase persistence classes configuration.
 */

return [
    Address::class => [
        'tableName' => 'tx_t3vbase_domain_model_address'
    ],
    Country::class => [
        'tableName' => 'tx_t3vbase_domain_model_country'
    ],
    CountryGroup::class => [
        'tableName' => 'tx_t3vbase_domain_model_country_group'
    ],
    EmailAddress::class => [
        'tableName' => 'tx_t3vbase_domain_model_email_address'
    ],
    Format::class => [
        'tableName' => 'tx_t3vbase_domain_model_format'
    ],
    PhoneNumber::class => [
        'tableName' => 'tx_t3vbase_domain_model_phone_number'
    ],
    Property::class => [
        'tableName' => 'tx_t3vbase_domain_model_property'
    ],
    Region::class => [
        'tableName' => 'tx_t3vbase_domain_model_region'
    ],
    Style::class => [
        'tableName' => 'tx_t3vbase_domain_model_style'
    ],
    Theme::class => [
        'tableName' => 'tx_t3vbase_domain_model_theme'
    ]
];
