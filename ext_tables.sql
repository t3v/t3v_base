-- Table structure for table `tt_content`:
CREATE TABLE tt_content (
  header_type varchar(255) DEFAULT '' NOT NULL
);

-- Table structure for table `tx_t3vbase_domain_model_address`:
CREATE TABLE tx_t3vbase_domain_model_address (
  label varchar(255) DEFAULT '' NOT NULL,
  type varchar(255) DEFAULT 'default' NOT NULL,
  handle varchar(255) DEFAULT '' NOT NULL,
  street varchar(255) DEFAULT '' NOT NULL,
  street_number varchar(255) DEFAULT '' NOT NULL,
  postcode varchar(255) DEFAULT '' NOT NULL,
  locality varchar(255) DEFAULT '' NOT NULL,
  region int(11) unsigned DEFAULT '0' NOT NULL,
  country int(11) unsigned DEFAULT '0' NOT NULL,
  description text NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL
);

-- Table structure for table `tx_t3vbase_domain_model_country`:
CREATE TABLE tx_t3vbase_domain_model_country (
  name varchar(255) DEFAULT '' NOT NULL,
  label varchar(255) DEFAULT '' NOT NULL,
  type varchar(255) DEFAULT 'default' NOT NULL,
  handle varchar(255) DEFAULT '' NOT NULL,
  regions int(11) unsigned DEFAULT '0' NOT NULL,
  country_groups int(11) unsigned DEFAULT '0' NOT NULL,
  description text NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL
);

-- Table structure for table `tx_t3vbase_domain_model_country_group`:
CREATE TABLE tx_t3vbase_domain_model_country_group (
  name varchar(255) DEFAULT '' NOT NULL,
  label varchar(255) DEFAULT '' NOT NULL,
  type varchar(255) DEFAULT 'default' NOT NULL,
  handle varchar(255) DEFAULT '' NOT NULL,
  countries int(11) unsigned DEFAULT '0' NOT NULL,
  description text NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL
);

-- Table structure for table `tx_t3vbase_domain_model_department`:
CREATE TABLE tx_t3vbase_domain_model_department (
  name varchar(255) DEFAULT '' NOT NULL,
  label varchar(255) DEFAULT '' NOT NULL,
  type varchar(255) DEFAULT 'default' NOT NULL,
  handle varchar(255) DEFAULT '' NOT NULL,
  description text NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL
);

-- Table structure for table `tx_t3vbase_domain_model_email_address`:
CREATE TABLE tx_t3vbase_domain_model_email_address (
  label varchar(255) DEFAULT '' NOT NULL,
  type varchar(255) DEFAULT 'default' NOT NULL,
  handle varchar(255) DEFAULT '' NOT NULL,
  address varchar(2048) DEFAULT '' NOT NULL,
  description text NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL
);

-- Table structure for table `tx_t3vbase_domain_model_format`:
CREATE TABLE tx_t3vbase_domain_model_format (
  name varchar(255) DEFAULT '' NOT NULL,
  label varchar(255) DEFAULT '' NOT NULL,
  type varchar(255) DEFAULT 'default' NOT NULL,
  handle varchar(255) DEFAULT '' NOT NULL,
  description text NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL
);

-- Table structure for table `tx_t3vbase_domain_model_phone_number`:
CREATE TABLE tx_t3vbase_domain_model_phone_number (
  label varchar(255) DEFAULT '' NOT NULL,
  type varchar(255) DEFAULT 'default' NOT NULL,
  handle varchar(255) DEFAULT '' NOT NULL,
  number varchar(255) DEFAULT '' NOT NULL,
  international_number varchar(255) DEFAULT '' NOT NULL,
  description text NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL
);

-- Table structure for table `tx_t3vbase_domain_model_region`:
CREATE TABLE tx_t3vbase_domain_model_region (
  name varchar(255) DEFAULT '' NOT NULL,
  label varchar(255) DEFAULT '' NOT NULL,
  type varchar(255) DEFAULT 'default' NOT NULL,
  handle varchar(255) DEFAULT '' NOT NULL,
  countries int(11) unsigned DEFAULT '0' NOT NULL,
  description text NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL
);

-- Table structure for table `tx_t3vbase_domain_model_style`:
CREATE TABLE tx_t3vbase_domain_model_style (
  name varchar(255) DEFAULT '' NOT NULL,
  label varchar(255) DEFAULT '' NOT NULL,
  type varchar(255) DEFAULT 'background-color' NOT NULL,
  handle varchar(255) DEFAULT '' NOT NULL,
  selector varchar(255) DEFAULT 'element' NOT NULL,
  background_color varchar(255) DEFAULT '' NOT NULL,
  background_images int(11) unsigned DEFAULT '0' NOT NULL,
  color varchar(255) DEFAULT '' NOT NULL,
  description text NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL
);

-- Table structure for table `tx_t3vbase_domain_model_theme`:
CREATE TABLE tx_t3vbase_domain_model_theme (
  name varchar(255) DEFAULT '' NOT NULL,
  label varchar(255) DEFAULT '' NOT NULL,
  type varchar(255) DEFAULT 'default' NOT NULL,
  handle varchar(255) DEFAULT '' NOT NULL,
  description text NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL
);

-- Table structure for table `tx_t3vbase_country_country_group_mm`:
CREATE TABLE tx_t3vbase_country_country_group_mm (
  uid_local int(11) unsigned DEFAULT '0' NOT NULL,
  uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  sorting int(11) unsigned DEFAULT '0' NOT NULL,
  sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);

-- Table structure for table `tx_t3vbase_country_region_mm`:
CREATE TABLE tx_t3vbase_country_region_mm (
  uid_local int(11) unsigned DEFAULT '0' NOT NULL,
  uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  sorting int(11) unsigned DEFAULT '0' NOT NULL,
  sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);

-- === T3v Generator ===
