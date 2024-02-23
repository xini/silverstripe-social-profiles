# SilverStripe Social Profiles

[![Version](http://img.shields.io/packagist/v/innoweb/silverstripe-social-profiles.svg?style=flat-square)](https://packagist.org/packages/innoweb/silverstripe-social-profiles)
[![License](http://img.shields.io/packagist/l/innoweb/silverstripe-social-profiles.svg?style=flat-square)](license.md)

## Overview

Adds social profile links to the site.

## Requirements

* SilverStripe CMS 5.x

Note: this version is compatible with SilverStripe 5.
For SilverStripe 4, please see the [2.x release line](https://github.com/xini/silverstripe-social-profiles/tree/2).
For SilverStripe 3, please see the [1.x release line](https://github.com/xini/silverstripe-social-profiles/tree/1.0).

## Installation

Install the module using composer:
```
composer require innoweb/silverstripe-social-profiles dev-master
```

Then run dev/build.

## Configuration

The module adds a new tab to the SiteConfig in the CMS where all the social profiles can be configured. 

To add the profile links to your site, add the following include to your `Page.ss` template:

```
<% include SocialProfileLinks %>
```

### MultiSites support

The module supports [multisites](https://github.com/symbiote/silverstripe-multisites) and [configured-multisites](https://github.com/fromholdio/silverstripe-configured-multisites) and by default adds the config options to the Sites.


If you want to manage the profiles globally, please add the following settings in your `config.yml`:

```
Innoweb\SocialProfiles\Extensions\ConfigExtension:
  multisites_enable_global_settings: true
``` 

This will add the fields to your SiteConfig instead of Site. 

## License

BSD 3-Clause License, see [License](license.md)
