<?php
class SocialProfilesConfigExtension extends DataExtension {
 
	private static $db = array(
		'ProfilesFacebookPage' => 'Varchar(255)',
		'ProfilesTwitterPage' => 'Varchar(255)',
		'ProfilesGooglePage' => 'Varchar(255)',
		'ProfilesLinkedinPage' => 'Varchar(255)',
		'ProfilesPinterestPage' => 'Varchar(255)',
		'ProfilesYoutubePage' => 'Varchar(255)',
		'ProfilesInstagramPage' => 'Varchar(255)',
	);
	
	public function updateCMSFields(FieldList $fields) {
		
		if (
			!class_exists('Multisites')
			|| (Config::inst()->get('SocialMediaConfigExtension', 'multisites_enable_global_settings') && $this->owner instanceof SiteConfig)
			|| (!Config::inst()->get('SocialMediaConfigExtension', 'multisites_enable_global_settings') && $this->owner instanceof Site)
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
	}
	
	private function updateLinkURL($url) {
		if($url) {
			if(
				substr($url, 0, 8) != 'https://'
				&& substr($url, 0, 7) != 'http://'
				&& substr($url, 0, 6) != 'ftp://'
			) {
				$url = 'http://' . $url;
			}
		}
		return $url;
	}
	
}