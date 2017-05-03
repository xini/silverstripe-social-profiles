<?php
class SocialProfilesPageExtension extends SiteTreeExtension {
	
    public function getSocialProfilesConfig() {
        if (class_exists('Multisites') && !Config::inst()->get('SocialProfilesConfigExtension', 'multisites_enable_global_settings')) {
            return Multisites::inst()->getCurrentSite();
        } else {
            return SiteConfig::current_site_config();
        }
        return null;
    }
    
}

