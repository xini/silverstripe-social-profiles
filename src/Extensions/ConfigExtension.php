<?php

namespace Innoweb\SocialProfiles\Extensions;

use SilverStripe\Core\Config\Config;
use SilverStripe\Core\Extension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\SiteConfig\SiteConfig;
use Symbiote\Multisites\Model\Site;

class ConfigExtension extends Extension
{
    public $owner;

    private static $db = [
        'ProfilesFacebookPage' => 'Text',
        'ProfilesTwitterPage' => 'Text',
        'ProfilesGooglePage' => 'Text',
        'ProfilesLinkedinPage' => 'Text',
        'ProfilesPinterestPage' => 'Text',
        'ProfilesYoutubePage' => 'Text',
        'ProfilesInstagramPage' => 'Text',
        'ProfilesSnapchatPage' => 'Text',
        'ProfilesTiktokPage' => 'Text',
        'ProfilesTwitchPage' => 'Text',
        'ProfilesVimeoPage' => 'Text',
        'ProfilesRedditPage' => 'Text',
        'ProfilesGithubPage' => 'Text',
        'ProfilesThreadsPage' => 'Text',
        'ProfilesMastodonPage' => 'Text',
        'ProfilesBlueskyPage' => 'Text',
    ];

    public function updateCMSFields(FieldList $fields)
    {

        if ((!class_exists(\Symbiote\Multisites\Multisites::class) && !class_exists(\Fromholdio\ConfiguredMultisites\Multisites::class))
            || (Config::inst()->get(ConfigExtension::class, 'multisites_enable_global_settings') && $this->owner instanceof SiteConfig)
            || (!Config::inst()->get(ConfigExtension::class, 'multisites_enable_global_settings') && $this->owner instanceof Site)
            || (!Config::inst()->get(ConfigExtension::class, 'multisites_enable_global_settings') && $this->owner instanceof \Fromholdio\ConfiguredMultisites\Model\Site)
        ) {
            // profiles
            $fields->addFieldsToTab("Root.SocialMediaProfiles", [
                TextField::create("ProfilesBlueskyPage", _t("SocialMediaSiteConfigExtension.BLUESKYPAGE", 'Bluesky Page (full URL)')),
                TextField::create("ProfilesFacebookPage", _t("SocialMediaSiteConfigExtension.FACEBOOKPAGE", 'Facebook Page (full URL)')),
                TextField::create("ProfilesGithubPage", _t("SocialMediaSiteConfigExtension.GITHUBPAGE", 'Github Page (full URL)')),
                TextField::create("ProfilesGooglePage", _t("SocialMediaSiteConfigExtension.GOOGLEPAGE", 'Google Page (full URL)')),
                TextField::create("ProfilesInstagramPage", _t("SocialMediaSiteConfigExtension.INSTAGRAMPAGE", 'Instagram Page (full URL)')),
                TextField::create("ProfilesLinkedinPage", _t("SocialMediaSiteConfigExtension.LINKEDINPAGE", 'LinkedIn Page (full URL)')),
                TextField::create("ProfilesMastodonPage", _t("SocialMediaSiteConfigExtension.MASTODONPAGE", 'Mastodon Page (full URL)')),
                TextField::create("ProfilesPinterestPage", _t("SocialMediaSiteConfigExtension.PINTERESTPAGE", 'Pinterest Page (full URL)')),
                TextField::create("ProfilesRedditPage", _t("SocialMediaSiteConfigExtension.REDDITPAGE", 'Reddit Page (full URL)')),
                TextField::create("ProfilesSnapchatPage", _t("SocialMediaSiteConfigExtension.SNAPCHATPAGE", 'SnapChat Page (full URL)')),
                TextField::create("ProfilesThreadsPage", _t("SocialMediaSiteConfigExtension.THREADSPAGE", 'Threads Page (full URL)')),
                TextField::create("ProfilesTiktokPage", _t("SocialMediaSiteConfigExtension.TIKTOKPAGE", 'TikTok Page (full URL)')),
                TextField::create("ProfilesTwitchPage", _t("SocialMediaSiteConfigExtension.TWITCHPAGE", 'Twitch Page (full URL)')),
                TextField::create("ProfilesVimeoPage", _t("SocialMediaSiteConfigExtension.VIMEOPAGE", 'Vimeo Page (full URL)')),
                TextField::create("ProfilesYoutubePage", _t("SocialMediaSiteConfigExtension.YOUTUBEPAGE", 'Youtube Page (full URL)')),
                TextField::create("ProfilesTwitterPage", _t("SocialMediaSiteConfigExtension.TWITTERPAGE", 'X (Twitter) Page (full URL)')),
            ]);

            $fields->fieldByName("Root.SocialMediaProfiles")->setTitle(_t('SocialMediaSiteConfigExtension.SocialMediaProfiles', 'Social Media Profiles'));
        }
    }

    public function updateSiteCMSFields(FieldList $fields)
    {
        $this->updateCMSFields($fields);
    }

    public function onBeforeWrite()
    {
        $this->owner->ProfilesBlueskyPage = $this->updateLinkURL($this->owner->ProfilesBlueskyPage);
        $this->owner->ProfilesFacebookPage = $this->updateLinkURL($this->owner->ProfilesFacebookPage);
        $this->owner->ProfilesGithubPage = $this->updateLinkURL($this->owner->ProfilesGithubPage);
        $this->owner->ProfilesGooglePage = $this->updateLinkURL($this->owner->ProfilesGooglePage);
        $this->owner->ProfilesInstagramPage = $this->updateLinkURL($this->owner->ProfilesInstagramPage);
        $this->owner->ProfilesLinkedinPage = $this->updateLinkURL($this->owner->ProfilesLinkedinPage);
        $this->owner->ProfilesMastodonPage = $this->updateLinkURL($this->owner->ProfilesMastodonPage);
        $this->owner->ProfilesPinterestPage = $this->updateLinkURL($this->owner->ProfilesPinterestPage);
        $this->owner->ProfilesRedditPage = $this->updateLinkURL($this->owner->ProfilesRedditPage);
        $this->owner->ProfilesSnapchatPage = $this->updateLinkURL($this->owner->ProfilesSnapchatPage);
        $this->owner->ProfilesThreadsPage = $this->updateLinkURL($this->owner->ProfilesThreadsPage);
        $this->owner->ProfilesTiktokPage = $this->updateLinkURL($this->owner->ProfilesTiktokPage);
        $this->owner->ProfilesTwitchPage = $this->updateLinkURL($this->owner->ProfilesTwitchPage);
        $this->owner->ProfilesTwitterPage = $this->updateLinkURL($this->owner->ProfilesTwitterPage);
        $this->owner->ProfilesVimeoPage = $this->updateLinkURL($this->owner->ProfilesVimeoPage);
        $this->owner->ProfilesYoutubePage = $this->updateLinkURL($this->owner->ProfilesYoutubePage);
    }

    private function updateLinkURL($url)
    {
        if ($url && (!str_starts_with((string) $url, 'https://') && !str_starts_with((string) $url, 'http://') && !str_starts_with((string) $url, 'ftp://'))) {
            $url = 'https://' . $url;
        }

        return $url;
    }
}
