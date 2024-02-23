<?php

namespace Innoweb\SocialProfiles\Extensions;

use SilverStripe\Core\Config\Config;
use SilverStripe\SiteConfig\SiteConfig;

class PageExtension extends \SilverStripe\CMS\Model\SiteTreeExtension
{
    public function getSocialProfilesConfig() {
        if (class_exists(\Symbiote\Multisites\Multisites::class)
            && !Config::inst()->get(ConfigExtension::class, 'multisites_enable_global_settings')
        ) {
            return \Symbiote\Multisites\Multisites::inst()->getCurrentSite();
        } elseif (class_exists(\Fromholdio\ConfiguredMultisites\Multisites::class)
            && !Config::inst()->get(ConfigExtension::class, 'multisites_enable_global_settings')
        ) {
            return \Fromholdio\ConfiguredMultisites\Multisites::inst()->getCurrentSite();
        } else {
            return SiteConfig::current_site_config();
        }
    }
}

