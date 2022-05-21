<?php
declare(strict_types=1);

/**
 * The Extbase persistence classes configuration.
 *
 * @noinspection PhpFullyQualifiedNameUsageInspection
 */

return [
    \T3v\T3vBase\Domain\Model\Address::class => [
        'tableName' => 'tx_t3vbase_domain_model_address'
    ],
    \T3v\T3vBase\Domain\Model\Country::class => [
        'tableName' => 'tx_t3vbase_domain_model_country'
    ],
    \T3v\T3vBase\Domain\Model\CountryGroup::class => [
        'tableName' => 'tx_t3vbase_domain_model_country_group'
    ],
    \T3v\T3vBase\Domain\Model\EmailAddress::class => [
        'tableName' => 'tx_t3vbase_domain_model_email_address'
    ],
    \T3v\T3vBase\Domain\Model\Format::class => [
        'tableName' => 'tx_t3vbase_domain_model_format'
    ],
    \T3v\T3vBase\Domain\Model\PhoneNumber::class => [
        'tableName' => 'tx_t3vbase_domain_model_phone_number'
    ],
    \T3v\T3vBase\Domain\Model\Property::class => [
        'tableName' => 'tx_t3vbase_domain_model_property'
    ],
    \T3v\T3vBase\Domain\Model\Region::class => [
        'tableName' => 'tx_t3vbase_domain_model_region'
    ],
    \T3v\T3vBase\Domain\Model\Style::class => [
        'tableName' => 'tx_t3vbase_domain_model_style'
    ],
    \T3v\T3vBase\Domain\Model\Theme::class => [
        'tableName' => 'tx_t3vbase_domain_model_theme'
    ]
];
