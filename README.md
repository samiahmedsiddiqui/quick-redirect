# Quick Redirects

This plugin is a fork of [Quick Page/Post Redirect Plugin](https://wordpress.org/plugins/quick-pagepost-redirect-plugin/). This fork is created to fix PHP 8 issues and make it compatible with it.

This plugin has two redirect functionalities - **"Quick Redirects"** and **"Individual Redirects"**:

## QUICK REDIRECTS (301 Redirects)

Quick Redirects are designed to be quick and simple to add. You do not need to have an existing page or post set up to add one. You just put the Request URL and the Destination URL and the plugin will redirect it. This type of redirect is great for fixing typos when a page was created, redirecting old URLs to a new URL so there is no 404, and to redirect links from an old site that has been converted to WordPress.

## INDIVIDUAL REDIRECTS (for existing pages/posts)

For pages/posts that already exist, the plugin adds an option meta box to the edit screen where you can specify the redirect location and type (301, 302 or meta). This type of redirect is useful for many things, including menu items, duplicate posts, or just redirecting a page to a different URL or location on your existing site.

For best results use some form of WordPress Permalink structure. If you have other Redirect plugins installed, it is recommended that you use only one redirect plugin or they may conflict with each other or one may take over before the other can do its job.

## What You CAN Do (aka, Features):

* Works with WordPress Nav Menus
* Works with WordPress Custom Post Types (select setting on options page)
* You can set a redirected page or menu item to open in a new window (Quick Redirects require **Use jQuery?** option to be set)
* You can add a *rel="nofollow"* attribute to the page or menu item link for the redirect (Quick Redirects require **Use jQuery?** option to be set)
* You can completely re-write the URL for the redirect so it takes the place of the original URL (rewrite the href link)
* You can redirect without needing to create a Page or Post using Quick Redirects. This is useful for sites that were converted to WordPress and have old links that create 404 errors (see FAQs for more information).
* Destination URL can be to another WordPress page/post or any other website with an external URL.
* Request URL can be a full URL path, the post or page ID, permalink or page slug.
* Option Screen to set global overrides like turning off all redirects at once, setting a global destination link, make all redirects open in a new window, etc.
* View a summary of all redirected pages/posts, custom post types and Quick Redirects that are currently set up.
* Plugin Clean up functions for those who decide they may want to remove all plugin data on uninstall.
* Import/Export of redirects for backup, or to add bulk Quick Redirects.
* Built-in FAQs/Help feed that can be updated daily with relevant questions.
* Optional column for list pages to easily show if a page/post has a redirect set up and where it will redirect to.
* Helper functions for adding or deleting redirects programmatically (see 'filters-hooks-helper_functions.txt' file in plugin folder for help and usage).

## What You CANNOT Do:

* This plugin does not have wild-card redirect features.
* This plugin DOES NOT modify the .htaccess file. It works using the WordPress function wp_redirect(), which is a form of PHP header location redirect.
* You cannot redirect the Home (Posts) page - unless you set a page as the home page and redirect that.
* If your theme uses some form of custom layout or functionality, some features may not work like open on a new window or no follow functionality UNLESS you have the **Use jQuery?** option to set.

This plugin is not compatible with WordPress versions less than 4.0. Requires PHP 5.2+.

**PLEASE NOTE:** A new page or post needs to be Published in order for Page/Post redirect to happen for Individual Redirects (existing page is not necessary for Quick Redirects). It WILL work on a DRAFT Status Post/Page ONLY, and I mean ONLY, if the Post/Page has FIRST been Published and the re-saved as a Draft. This does not apply to Quick Redirects.

## TROUBLESHOOTING:
* To include custom post types, check the setting on the plugin option page - and you also can hide it from post types you don't want it on.
* If you experience jQuery conflicts with the plugin, try turning off the **Use jQuery?** setting in the options page. BUT, please note that if this option if off, the new window and no follow functionality may be inconsistent (this mainly depends on how your theme is set up)
* If you check the box for "Show Redirect URL below" on the edit page, please note that you MUST use the full URL in the Redirect URL box. If you do not, you may experience some odd links and 404 pages, as this option changes the link for the page/post to the EXACT URL you enter in that field. (i.e., if you enter '2' in the field, it will redirect to 'http://2' which is not the same as 'http://yoursite.com/?p=2').
* If your browser tells you that your are in an infinite loop, check to make sure you do not have pages redirecting to another page that redirects back to the initial page. That WILL cause an infinite loop.
* If you are using the Quick Redirects method to do your redirects, try to use Request URLs that start with a '/' and are relative to the root (i.e., 'http://mysite.com/test/' should be set to '/test/' for the request field).
* If your site uses mixes SSL, use relative links whenever possible (i.e., '/my-page/'). The plugin is designed to detect the incoming protocol and try to apply the appropriate protocol to the destination URL.
* Links in page/post content and links that are created using get_permalink() or the_permalink() will not open in a new window or add the rel=nofollow UNLESS you have the **Use jQuery?** option set.
* If your page or post is not redirecting, this is most likely because something else like the theme functions file or another plugin is outputting the header BEFORE the plugin can perform the redirect. This can be tested by turning off all plugins except the Quick Page/Post Redirect Plugin and testing if the redirect works. Many times a plugin or bad code is the culprit.
* We try to test the plugin in many popular themes and alongside popular plugins. In our experience, (with exception to a few bugs from time to time) many times another plugin is the cause of the issues - or a customized theme. If you do notice a problem, please let us know at info@anadnet.com - along with the WP version, theme you are using and plugins you have installed - and we will try to troubleshoot the problem.
* Check the FAQs/Help located in the Plugin menu for more up to date issues and fixes.

## Installation

### If you downloaded this plugin:
1. Upload `quick_page_post_redirect` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Once Activated, you can add a redirect by entering the correct information in the `Quick Page/Post Redirect` box in the edit section of a page or post
1. You can create a redirect with the 'Quick Redirects' option located in the Quick Redirects admin menu.

### If you install this plugin through WordPress 2.8+ plugin search interface:
1. Click Install `Quick Page/Post Redirect Plugin`
1. Activate the plugin through the 'Plugins' menu.
1. Once Activated, you can add a redirect by entering the correct information in the `Quick Page/Post Redirect` box in the edit section of a page or post
1. You can create a redirect with the 'Quick Redirects' option located in the Quick Redirects admin menu.

## Frequently Asked Questions

**Q. Why is my Page/Post not redirecting?**

A. FIRST - make sure it is active if using Individual Redirects (set up on the edit page for a post or page). Then, check to make sure the global option to turn off all redirects is not checked (in the plugin options).

SECOND - if you are using Quick Redirects, try using links relative to the root (so 'http://mysite.com/contact/' would be '/contact/' if using the root path). If your site is in a sub-folder (set in Settings/General), do not use the sub-folder in the root path as it is already taken into consideration by WordPress.

NEXT - clear your site's cache files if you are using a caching plugin/theme. You may also need to clear your browser cache and internet files if you use caching - the browser WILL hold cached versions of a page and not redirect if there was no redirect in the cached version.

FINALLY - if you are not using a permalink structure of some sort, it is recommended that you set up at least a basic one. Redirects without a permalink structure can be inconsistant.

If your page or post is still not redirecting, then it is most likely because something else like the theme functions file or another plugin is outputting the header BEFORE the plugin can perform the redirect. This can be tested by turning off all plugins except the Quick Page/Post Redirect Plugin and testing if the redirect works. many time a plugin or bad code is the culprit - or the redirect is just simply turned off.

We have tested the plugin in dozens of themes and a whole lot more plugins. In our experience, (with exception to a few bugs) many times another plugin or the theme scripting is the problem. If you do notice a problem, please let us know at info@anadnet.com - along with the WP version, theme you are using and plugins you have installed - and we will try to troubleshoot the problem.

**Q. Should I use a full URL with http:// or https:// ?**

A. Yes, you can, but you do not always need to. If you are redirecting to an external URL, then yes. If you are just redirecting to another page or post on your site, then no, it is not needed. When in doubt, use the entire URL. For Quick Redirects, it is recommended that you use relative URLs whenever possible.

**Q. Can I do a permanent 301 Redirect?**

A. Yes. You can perform a 301 Permanent Redirect. Additionally, you can select a 302 Temporary or a 307 Temporary redirect or a Meta redirect. Quick Redirects are always 301 unless you override them with a filter.

**Q. Is the plugin SEO friendly?**

A. Yes it is. The plugin uses standard redirect status methods to redirect the URLs. SEO crawlers use the status code to determine if a page request is available, moved or if there is some other error.

If you do not want a search engine to follow a Redirect URL, use the No Follow option to add 'rel="nofollow"' to the link.

**Q. If I redirect a page that has a good Ranking in Google, will I lose that Ranking?**

A. The answer is dependent on two things:

1. What type of redirect it is
2. What content is on the redirected page.

If you use a redirect of 301 AND the content on the destination URL is the same as the original page (just a different URL), then allof the ranking and 'link juice', as they say, will stay with the page.

If you use a redirect of 301 and the content is different, then it will be indexed and ranked accordingly, as any other page would.

If you use a 302 redirect, the search engines will not change anything, but also index the destination page as it would any other page.

**Q. Do I need to have a Page or Post Created to redirect?**

A. No. There is a Quick Redirects feature that allows you to create a redirect for any URL on your site. This is VERY helpful when you move an old site to WordPress and have old links that need to go some place new. For example,
If you had a link on a site that went to http://yoursite.com/aboutme.html you can now redirect that to http://yoursite.com/about/ without needing to edit the htaccess file. You simply add the old URL (/aboutme.html) and tell it you want to go to the new one (/about/). Simple as that.

The functionality is located in the QUICK REDIRECTS menu. The old URL goes in the Request field and the to new URL goes in the Destination field. Simple and Quick!

**Q. Does the Page/Post need to be Published to redirect?**
A. YES... and NO... The redirect will always work on a Published Post/Page. For it to work correctly on a Post/Page in DRAFT status, you need to fist publish the page, then re-save it as a draft. If you don't follow that step, you will get a 404 error.

**Q. Can I add 'rel="nofollow" attribute to the redirect link?**

A. YES, you can add a ' rel="nofollow" ' attribute for the redirect link. Simply check the "add rel=nofollow" box when setting up the redirect on the page/post edit page. Note - this option is only available for the Quick Redirects method when the 'Use jQuery?' functionality is enabled in the settings and you select the 'NF' box for the corresponding redirect.

**Q. Can I make the redirect open in a new window?**

A. YES, you can make the redirect link open in a new window. Simply check the "Open in a new window" box when setting up the individual redirect on the page/post edit page. Note - this option is only available for the Quick Redirects method when the 'Use jQuery?' functionality is enabled in the settings and you select the 'NW' box for the corresponding redirect.

**Q. I still can't get the OPEN IN NEW WINDOW option to work... why?**

A. First, make sure you have the 'Use jQuery?' option set in the options page. This functionality drastically increases the plugin's ability to add the correct properties and attributes to the links to make them work as desired.

If you cannot us this option (because of a conflict with another script), then you may only have limited success with this feature.
The reason - some themes put custom links in the menu, like RSS and other similar items. Many times (an this is usually the main reason why), they do not use the WP hook to add the menu item to the list - they literally just put it there. Unless the theme uses the internal WordPress hooks to call the menu, redirects, open in a new window and rel=nofollow features just will not work.
ADDITIONALLY - Links in page/post content and Permalinks will not open in a new window or add the rel=nofollow. That is because the theme template actually sets up the links by calling "the_permalink()" function so add these elements is not consistently possible so it has been excluded from the functionality. The links will still redirect just fine but without that feature.

**Q. I want to just have the link for the redirecting page/post show the new redirect link in the link, not the old one, can I do that?**

A. YES, you can hide the original page link and have it replaced with the redirect link. Any place the theme calls either "wp_page_links", "post_links" or "page_links" functions, the plugin can replace the original link with the new one. Simply check the "Show Redirect URL" box when setting up the redirect on the page/post edit page.

Note - This option is available for the Quick Redirects only with the 'Use jQuery?' option enabled.

**Q. I have Business Cards/Postcards/Ads that say my website is http://something.com/my-name/ or http://something.com/my-product/, but it should be a different page, can I set that up with this?**

A. YES! Just set up a Quick Redirect (see above) and set the Request URL to `/my-name/` or `/my-product/` and the Destination URL to the place you want it to go. The destination doesn't even need to be on the same site - it can go anywhere you want it to go!

**Q. What the heck is a 301 or 302 redirect anyway?**

A. Good question! The number corresponds with the header code that is returned to the browser when the page is first accessed. A good page, meaning something was found, returns a 200 status code and that tells the browser to go ahead and keep loading the content for the page. If nothing is found a 404 error is returned (and we have ALL seen these - usually it is a bad link or a page was moved). There are many other types of codes, but those are the most common.

The 300+ range of codes in the header tells the browser (and search engine spider) that the original page has moved to a new location - this can be just a new file name a new folder or a completely different site.

A 301 code means that you want to tell the browser (or Google, bing, etc.) that your new page has permanently moved to a new location. This is great for search engines because it lets them know that there was a page there once, but now go to the new place to get it - and they update there old link to is so future visitors will not have to go through the same process.

A 302 or 307 code tell the browser that the file was there but TEMPORARILY it can be found at a new location. This will tell the search engines to KEEP the old link in place because SOME day it will be back at the same old link. There is only a slight difference between a 302 and a 307 status. Truth is, 302 is more widely used, so unless you know why you need a 307, stick with a 302.

**Q. So, which one do I use?**

A. Easiest way to decide is this: If you want the page to permanently change to a new spot, use 301. If you are editing the page or post and only want it to be down for a few hours, minutes, days or weeks and plan on putting it back with the same link as before, then us 302. If you are having trouble with the redirects, use a `meta` redirect. The meta redirect actually starts to load the page as a 200 good status, then redirects using a meta redirect tag.

Still not sure? Try 302 for now - at least until you have a little time to read up on the subject.

**Q. If I have a redirect in place, can I view the original page during testing?**

A. Yes, use the URL as normal, and add `?action=no-redirect` to the query data (or `&action=no-redirect` if there is already query data present).

For example. If you set up a redirect for the page `http://mysite.com/old-page/` and you want to see the page (and not have it redirect on you so you can look at it), type the URL as `http://mysite.com/old-page/?action=no-redirect` and it will load like there is no redirect present.
