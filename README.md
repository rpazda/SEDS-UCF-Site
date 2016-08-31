# SEDSUCF
SEDS UCF Website

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