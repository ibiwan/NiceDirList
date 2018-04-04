# Nice Dirlist

A single-file solution for pretty directory listings

## Features:

* Built-in file type guessing
* FontAwesome icons
* Responsive with Bootstrap 4.0
* Support for adding mirror URLs

## Installing

* Upload `index.php` to the web root
* Upload `htaccess` and rename to `.htaccess`
    * For non-Apache, configure your server to serve /index.php for all subfolders
* Edit the top of `index.php` to customize with your branding
    * Edit the list of ignored filenames
    * (Recommended) Change the CDN URLs for Bootstrap and FontAwesome to your CDN of choice