<?php

namespace Innoweb\SocialProfiles\Extensions;

use SilverStripe\SiteConfig\SiteConfig;

class PageExtension extends \SilverStripe\CMS\Model\SiteTreeExtension {

    public function getSocialProfilesConfig() {
        if (class_exists('Symbiote\Multisites\Multisites') && !Config::inst()->get(ConfigExtension::class, 'multisites_enable_global_settings')) {
            return \Symbiote\Multisites\Multisites::inst()->getCurrentSite();
        }
        return SiteConfig::current_site_config();
    }

}

