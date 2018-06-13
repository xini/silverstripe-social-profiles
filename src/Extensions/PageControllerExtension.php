<?php

namespace Innoweb\SocialProfiles\Extensions;

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

class PageControllerExtension extends Extension {

	public function onAfterInit() {
	    Requirements::css('innoweb/silverstripe-social-profiles:/client/css/social-profiles.css');
	}

}
