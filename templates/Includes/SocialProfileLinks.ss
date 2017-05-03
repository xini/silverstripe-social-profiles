<ul class="social-profiles">
	<% if $SocialProfilesConfig.ProfilesTwitterPage %>
	<li class="social-link twitter">
		<a href="$SocialProfilesConfig.ProfilesTwitterPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Twitter"><span>$SocialProfilesConfig.Title on Twitter</span></a>
	</li>
	<% end_if %>
	<% if $SocialProfilesConfig.ProfilesFacebookPage %>
	<li class="social-link facebook">
		<a href="$SocialProfilesConfig.ProfilesFacebookPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Facebook"><span>$SocialProfilesConfig.Title on Facebook</span></a>
	</li>
	<% end_if %>
	<% if $SocialProfilesConfig.ProfilesGooglePage %>
	<li class="social-link google">
		<a href="$SocialProfilesConfig.ProfilesGooglePage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Google+"><span>$SocialProfilesConfig.Title on Google+</span></a>
	</li>
	<% end_if %>
	<% if $SocialProfilesConfig.ProfilesLinkedinPage %>
	<li class="social-link linkedin">
		<a href="$SocialProfilesConfig.ProfilesLinkedinPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on LinkedIn"><span>$SocialProfilesConfig.Title on LinkedIn</span></a>
	</li>
	<% end_if %>
	<% if $SocialProfilesConfig.ProfilesPinterestPage %>
	<li class="social-link pinterest">
		<a href="$SocialProfilesConfig.ProfilesPinterestPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Pinterest"><span>$SocialProfilesConfig.Title on Pinterest</span></a>
	</li>
	<% end_if %>
	<% if $SocialProfilesConfig.ProfilesInstagramPage %>
	<li class="social-link instagram">
		<a href="$SocialProfilesConfig.ProfilesInstagramPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Instagram"><span>$SocialProfilesConfig.Title on Instagram</span></a>
	</li>
	<% end_if %>
	<% if $SocialProfilesConfig.ProfilesYoutubePage %>
	<li class="social-link youtube">
		<a href="$SocialProfilesConfig.ProfilesYoutubePage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Youtube"><span>$SocialProfilesConfig.Title on Youtube</span></a>
	</li>
	<% end_if %>
</ul>