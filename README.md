# SEDSUCF
SEDS UCF Website

http://mae.ucf.edu/mmae/seds/


## Overview

The site was designed to be simple, clean, and easy to update with relatively little experience. The site is mostly self-contained and is written in HTML and CSS with a bit of PHP and support for JavaScript/JQuery but none implemented for now. The primary usage of PHP here is to make the site modular in the interest of reducing unnecessary duplication. The consequence of modularity is that there are lots of small files that rely on each other. The benefit is that if you know where the component you want to change is you probably only have to change it in one place.

## Folders

### assets

The assets folder is the storage place for visual content for the site, such as photos, banner images, backgrounds, etc. Inside there is a folder called "photos" specifically for photographic content such as project pictures or group photos. The main level of the assets folder is for site components images such as banners, icons, and logos.

### content

The content folder is for storing libraries and frameworks for the site, such as BootStrap, FontAwesome, and any custom scripts that may be needed for the site. There is a folder specifically for JavaScript/JQuery scripts but this is not in use right now.

### dev

The dev folder is for assorted files used for development but not strictly part of the site. It contains the boneyard, a place for files not currently being used but that may be useful in the future. Also here is a template for main pages. This should be a full combined version of the two components of the layout, top and bottom, which will be discussed below. The template can be used to test modifications to the main layout. It is important to make sure it has the current code from the layout components and you understand how they work before making changes.

## PHP Pages

All of the main pages of the site and partial pages are written as .php files so that PHP code can be used on them. The filenames of partial pages begin with an underscore such as _header.php. This makes it easier to determine the role of each file.

Main content pages begin with a capital letter, with the exception of index.php. index.php is the page the server loads by default if someone visits the site directory without a page specified, such as http://mae.ucf.edu/mmae/seds. Links to main pages are included in _header.php, which is included at the top of all pages.

## Site Architecture

Each main page of the site is designed to include mostly just its content. All other components are added as parts of the layout using PHP. Each main page file is simply the content for the main part of the div wrapped in PHP include statements for the top and bottom components of the layout. The rest of the page is shared content. This format makes changing pages pretty simple. To add or remove a main page you only need to add/remove a .php file and update _header.php. Below is a detailed description of the partial pages.

### _layout-top.php and _layout-bottom.php

These are the main components of the site in terms of structure. Together they comprise the layout for most of the site. They are split to make it simple to add them to new pages. It is important not to modify them unless you really know what you are doing. The easiest way to modify them is using the template in the "dev" folder. It has a comment where they are split so it is easy to update the two pieces of the layout.

### _header.php

This contains the content for the top of the main pages, namely the logo div and the navigation bar. This needs to be updated when pages are added/removed or if the logo is updated and needs adjusting. The nav bar is just an unordered list &lt;ul&gt; with list items &lt;li&gt; which contain anchor links &lt;a&gt; to other pages. Each link also has a FontAwesome icon &lt;i&gt;. This should be simple to update if you follow the pattern.

### _sidebar-content.php 

This page contains the content that will be displayed in the sidebar on each page. Updating this file will change the sidebar content on every page. It is important to remember to keep this content brief since there is limited space in the sidebar. This is mostly for main links, meeting times, and general reminders.

### _footer.php

This page contains the content that goes in the footer on the bottom of each page. This is basically just a signature for the site, a contact link for the webmaster, and a copyright for the year, which auto-increments using PHP.

### _shared-content-links

This page is just for links to libraries and such common to all pages. It is an artifact from before the split layout was implemented. Adding page specific references has not proven necessary yet but if necessary can probably be done simply using JavaScript/JQuery.
