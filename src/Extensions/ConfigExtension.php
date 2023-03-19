<?php

namespace Innoweb\SocialProfiles\Extensions;

use SilverStripe\Core\Config\Config;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\SiteConfig\SiteConfig;

class ConfigExtension extends DataExtension {

    private static $db = array(
        'ProfilesFacebookPage' => 'Varchar(1024)',
        'ProfilesTwitterPage' => 'Varchar(1024)',
        'ProfilesGooglePage' => 'Varchar(1024)',
        'ProfilesLinkedinPage' => 'Varchar(1024)',
        'ProfilesPinterestPage' => 'Varchar(1024)',
        'ProfilesYoutubePage' => 'Varchar(1024)',
        'ProfilesInstagramPage' => 'Varchar(1024)',
        'ProfilesSnapchatPage' => 'Varchar(1024)',
        'ProfilesTiktokPage' => 'Varchar(1024)',
        'ProfilesTwitchPage' => 'Varchar(1024)',
        'ProfilesVimeoPage' => 'Varchar(1024)',
        'ProfilesRedditPage' => 'Varchar(1024)',
        'ProfilesGithubPage' => 'Varchar(1024)',
    );

    public function updateCMSFields(FieldList $fields) {

        if (
            !class_exists('Symbiote\Multisites\Multisites')
            || (Config::inst()->get(ConfigExtension::class, 'multisites_enable_global_settings') && $this->owner instanceof SiteConfig)
            || (!Config::inst()->get(ConfigExtension::class, 'multisites_enable_global_settings') && $this->owner instanceof \Symbiote\Multisites\Model\Site)
        ) {

            // profiles
            $fields->addFieldsToTab("Root.SocialMediaProfiles", array(
                new TextField("ProfilesFacebookPage", _t("SocialMediaSiteConfigExtension.FACEBOOKPAGE", 'Facebook Page (full URL)')),
                new TextField("ProfilesTwitterPage", _t("SocialMediaSiteConfigExtension.TWITTERPAGE", 'Twitter Page (full URL)')),
                new TextField("ProfilesGooglePage", _t("SocialMediaSiteConfigExtension.GOOGLEPAGE", 'Google Page (full URL)')),
                new TextField("ProfilesLinkedinPage", _t("SocialMediaSiteConfigExtension.LINKEDINPAGE", 'LinkedIn Page (full URL)')),
                new TextField("ProfilesPinterestPage", _t("SocialMediaSiteConfigExtension.PINTERESTPAGE", 'Pinterest Page (full URL)')),
                new TextField("ProfilesInstagramPage", _t("SocialMediaSiteConfigExtension.INSTAGRAMPAGE", 'Instagram Page (full URL)')),
                new TextField("ProfilesYoutubePage", _t("SocialMediaSiteConfigExtension.YOUTUBEPAGE", 'Youtube Page (full URL)')),
                new TextField("ProfilesVimeoPage", _t("SocialMediaSiteConfigExtension.VIMEOPAGE", 'Vimeo Page (full URL)')),
                new TextField("ProfilesTwitchPage", _t("SocialMediaSiteConfigExtension.TWITCHPAGE", 'Twitch Page (full URL)')),
                new TextField("ProfilesTiktokPage", _t("SocialMediaSiteConfigExtension.TIKTOKPAGE", 'TikTok Page (full URL)')),
                new TextField("ProfilesSnapchatPage", _t("SocialMediaSiteConfigExtension.SNAPCHATPAGE", 'SnapChat Page (full URL)')),
                new TextField("ProfilesRedditPage", _t("SocialMediaSiteConfigExtension.REDDITPAGE", 'Reddit Page (full URL)')),
                new TextField("ProfilesGithubPage", _t("SocialMediaSiteConfigExtension.GITHUBPAGE", 'Github Page (full URL)')),
            ));

            $fields->fieldByName("Root.SocialMediaProfiles")->setTitle(_t('SocialMediaSiteConfigExtension.SocialMediaProfiles', 'Social Media Profiles'));

        }
    }

    public function updateSiteCMSFields(FieldList $fields) {
        $this->updateCMSFields($fields);
    }

    public function onBeforeWrite() {
        parent::onBeforeWrite();

        $this->owner->ProfilesFacebookPage = $this->updateLinkURL($this->owner->ProfilesFacebookPage);
        $this->owner->ProfilesTwitterPage = $this->updateLinkURL($this->owner->ProfilesTwitterPage);
        $this->owner->ProfilesGooglePage = $this->updateLinkURL($this->owner->ProfilesGooglePage);
        $this->owner->ProfilesLinkedinPage = $this->updateLinkURL($this->owner->ProfilesLinkedinPage);
        $this->owner->ProfilesPinterestPage = $this->updateLinkURL($this->owner->ProfilesPinterestPage);
        $this->owner->ProfilesYoutubePage = $this->updateLinkURL($this->owner->ProfilesYoutubePage);
        $this->owner->ProfilesVimeoPage = $this->updateLinkURL($this->owner->ProfilesVimeoPage);
        $this->owner->ProfilesTwitchPage = $this->updateLinkURL($this->owner->ProfilesTwitchPage);
        $this->owner->ProfilesTiktokPage = $this->updateLinkURL($this->owner->ProfilesTiktokPage);
        $this->owner->ProfilesSnapchatPage = $this->updateLinkURL($this->owner->ProfilesSnapchatPage);
        $this->owner->ProfilesRedditPage = $this->updateLinkURL($this->owner->ProfilesRedditPage);
        $this->owner->ProfilesGithubPage = $this->updateLinkURL($this->owner->ProfilesGithubPage);
    }

    private function updateLinkURL($url) {
        if($url) {
            if(
                substr($url, 0, 8) != 'https://'
                && substr($url, 0, 7) != 'http://'
                && substr($url, 0, 6) != 'ftp://'
            ) {
                $url = 'https://' . $url;
            }
        }
        return $url;
    }

}
