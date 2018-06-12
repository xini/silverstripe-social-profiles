<?php

namespace Innoweb\SocialProfiles\Extensions;

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

class PageControllerExtension extends Extension {

	public function onAfterInit() {
	    Requirements::css('innoweb/silverstripe-social-share:css/social-profiles.css');
	}

}
