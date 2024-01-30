<ul class="social-profiles">
    <% if $SocialProfilesConfig.ProfilesFacebookPage %>
        <li class="social-link facebook">
            <a href="$SocialProfilesConfig.ProfilesFacebookPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Facebook">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/images/facebook.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Facebook">
            </a>
        </li>
    <% end_if %>
    <% if $SocialProfilesConfig.ProfilesGooglePage %>
        <li class="social-link google">
            <a href="$SocialProfilesConfig.ProfilesGooglePage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Google">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/images/google.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Google">
            </a>
        </li>
    <% end_if %>
    <% if $SocialProfilesConfig.ProfilesLinkedinPage %>
        <li class="social-link linkedin">
            <a href="$SocialProfilesConfig.ProfilesLinkedinPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on LinkedIn">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/images/linkedin.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on LinkedIn">
            </a>
        </li>
    <% end_if %>
    <% if $SocialProfilesConfig.ProfilesPinterestPage %>
        <li class="social-link pinterest">
            <a href="$SocialProfilesConfig.ProfilesPinterestPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Pinterest">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/images/pinterest.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Pinterest">
            </a>
        </li>
    <% end_if %>
    <% if $SocialProfilesConfig.ProfilesInstagramPage %>
        <li class="social-link instagram">
            <a href="$SocialProfilesConfig.ProfilesInstagramPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Instagram">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/images/instagram.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Instagram">
            </a>
        </li>
    <% end_if %>
    <% if $SocialProfilesConfig.ProfilesTwitterPage %>
        <li class="social-link twitter">
            <a href="$SocialProfilesConfig.ProfilesTwitterPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on X (Twitter)">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/images/x.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on X (Twitter)">
            </a>
        </li>
    <% end_if %>
    <% if $SocialProfilesConfig.ProfilesYoutubePage %>
        <li class="social-link youtube">
            <a href="$SocialProfilesConfig.ProfilesYoutubePage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Youtube">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/images/youtube.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Youtube">
            </a>
        </li>
    <% end_if %>
    <% if $SocialProfilesConfig.ProfilesVimeoPage %>
        <li class="social-link vimeo">
            <a href="$SocialProfilesConfig.ProfilesVimeoPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Vimeo">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/images/vimeo.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Vimeo">
            </a>
        </li>
    <% end_if %>
    <% if $SocialProfilesConfig.ProfilesTwitchPage %>
        <li class="social-link twitch">
            <a href="$SocialProfilesConfig.ProfilesTwitchPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Twitch">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/images/twitch.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Twitch">
            </a>
        </li>
    <% end_if %>
    <% if $SocialProfilesConfig.ProfilesTiktokPage %>
        <li class="social-link tiktok">
            <a href="$SocialProfilesConfig.ProfilesTiktokPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on TikTok">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/images/tiktok.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on TikTok">
            </a>
        </li>
    <% end_if %>
    <% if $SocialProfilesConfig.ProfilesSnapchatPage %>
        <li class="social-link snapchat">
            <a href="$SocialProfilesConfig.ProfilesSnapchatPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Snapchat">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/images/snapchat.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Snapchat">
            </a>
        </li>
    <% end_if %>
    <% if $SocialProfilesConfig.ProfilesRedditPage %>
        <li class="social-link reddit">
            <a href="$SocialProfilesConfig.ProfilesRedditPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Reddit">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/images/reddit.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Reddit">
            </a>
        </li>
    <% end_if %>
    <% if $SocialProfilesConfig.ProfilesGithubPage %>
        <li class="social-link github">
            <a href="$SocialProfilesConfig.ProfilesGithubPage" class="image" target="_blank" title="$SocialProfilesConfig.Title on Github">
                <img src="$resourceURL('innoweb/silverstripe-social-profiles:client/images/github.svg')" height="16" width="16" alt="$SocialProfilesConfig.Title on Github">
            </a>
        </li>
    <% end_if %>
</ul>
