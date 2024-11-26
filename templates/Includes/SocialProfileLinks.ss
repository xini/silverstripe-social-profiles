<ul class="social-profiles">
	<% if $SocialProfilesConfig.ProfilesFacebookPage %>
        <li class="social-link facebook">
            <a href="$SocialProfilesConfig.ProfilesFacebookPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Facebook">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/dist/icons/facebook.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Facebook">
            </a>
        </li>
	<% end_if %>
	<% if $SocialProfilesConfig.ProfilesGooglePage %>
	<li class="social-link google">
		<a href="$SocialProfilesConfig.ProfilesGooglePage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Google">
            <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/dist/icons/google.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Google">
        </a>
	</li>
	<% end_if %>
	<% if $SocialProfilesConfig.ProfilesLinkedinPage %>
	<li class="social-link linkedin">
		<a href="$SocialProfilesConfig.ProfilesLinkedinPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on LinkedIn">
            <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/dist/icons/linkedin.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on LinkedIn">
        </a>
	</li>
	<% end_if %>
	<% if $SocialProfilesConfig.ProfilesPinterestPage %>
	<li class="social-link pinterest">
		<a href="$SocialProfilesConfig.ProfilesPinterestPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Pinterest">
            <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/dist/icons/pinterest.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Pinterest">
        </a>
	</li>
	<% end_if %>
	<% if $SocialProfilesConfig.ProfilesInstagramPage %>
	<li class="social-link instagram">
		<a href="$SocialProfilesConfig.ProfilesInstagramPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Instagram">
            <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/dist/icons/instagram.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Instagram">
        </a>
	</li>
	<% end_if %>
	<% if $SocialProfilesConfig.ProfilesTwitterPage %>
        <li class="social-link twitter">
            <a href="$SocialProfilesConfig.ProfilesTwitterPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on X (Twitter)">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/dist/icons/x.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on X (Twitter)">
            </a>
        </li>
	<% end_if %>
    <% if $SocialProfilesConfig.ProfilesBlueskyPage %>
        <li class="social-link bluesky">
            <a href="$SocialProfilesConfig.ProfilesBlueskyPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Bluesky">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/dist/icons/bluesky.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Bluesky">
            </a>
        </li>
    <% end_if %>
    <% if $SocialProfilesConfig.ProfilesMastodonPage %>
        <li class="social-link mastodon">
            <a href="$SocialProfilesConfig.ProfilesMastodonPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Mastodon">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/dist/icons/mastodon.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Mastodon">
            </a>
        </li>
    <% end_if %>
    <% if $SocialProfilesConfig.ProfilesThreadsPage %>
        <li class="social-link threads">
            <a href="$SocialProfilesConfig.ProfilesThreadsPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Threads">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/dist/icons/threads.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Threads">
            </a>
        </li>
    <% end_if %>
	<% if $SocialProfilesConfig.ProfilesYoutubePage %>
	<li class="social-link youtube">
		<a href="$SocialProfilesConfig.ProfilesYoutubePage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Youtube">
            <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/dist/icons/youtube.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Youtube">
        </a>
	</li>
	<% end_if %>
    <% if $SocialProfilesConfig.ProfilesVimeoPage %>
        <li class="social-link vimeo">
            <a href="$SocialProfilesConfig.ProfilesVimeoPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Vimeo">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/dist/icons/vimeo.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Vimeo">
            </a>
        </li>
    <% end_if %>
    <% if $SocialProfilesConfig.ProfilesTwitchPage %>
        <li class="social-link twitch">
            <a href="$SocialProfilesConfig.ProfilesTwitchPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Twitch">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/dist/icons/twitch.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Twitch">
            </a>
        </li>
    <% end_if %>
    <% if $SocialProfilesConfig.ProfilesTiktokPage %>
        <li class="social-link tiktok">
            <a href="$SocialProfilesConfig.ProfilesTiktokPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on TikTok">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/dist/icons/tiktok.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on TikTok">
            </a>
        </li>
    <% end_if %>
    <% if $SocialProfilesConfig.ProfilesSnapchatPage %>
        <li class="social-link snapchat">
            <a href="$SocialProfilesConfig.ProfilesSnapchatPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Snapchat">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/dist/icons/snapchat.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Snapchat">
            </a>
        </li>
    <% end_if %>
    <% if $SocialProfilesConfig.ProfilesRedditPage %>
        <li class="social-link reddit">
            <a href="$SocialProfilesConfig.ProfilesRedditPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Reddit">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/dist/icons/reddit.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Reddit">
            </a>
        </li>
    <% end_if %>
    <% if $SocialProfilesConfig.ProfilesGithubPage %>
        <li class="social-link github">
            <a href="$SocialProfilesConfig.ProfilesGithubPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Github">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/dist/icons/github.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Github">
            </a>
        </li>
    <% end_if %>
</ul>
