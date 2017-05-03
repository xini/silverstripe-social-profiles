# SilverStripe Social Metadata

[![Version](http://img.shields.io/packagist/v/innoweb/silverstripe-social-profiles.svg?style=flat-square)](https://packagist.org/packages/innoweb/silverstripe-social-profiles)
[![License](http://img.shields.io/packagist/l/innoweb/silverstripe-social-profiles.svg?style=flat-square)](license.md)

## Overview

Adds social profile links to the site.

## Requirements

* SilverStripe CMS ~3.2

## Installation

Install the module using composer:
```
composer require innoweb/silverstripe-social-profiles dev-master
```
or download or git clone the module into a ‘social-profiles’ directory in your webroot.

Then run dev/build.

## Configuration

The module adds a new tab to the SiteConfig in the CMS where all the social profiles can be configured. 

To add the profile links to your site, add the following include to your `Page.ss` template:

```
<% include SocialProfileLinks %>
```

### MultiSites support

The module supports the [multisites module] (https://github.com/silverstripe-australia/silverstripe-multisites) and by default adds the config options to the Sites.

If you want to manage the profiles globally, please add the following settings in your `config.yml`:

```
SocialProfilesConfigExtension:
  multisites_enable_global_settings: true
``` 

This will add the fields to your SiteConfig instead of Site. 

## License

BSD 3-Clause License, see [License](license.md)
