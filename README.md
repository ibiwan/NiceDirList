Forked from https://source.netsyms.com/Netsyms/NiceDirlist.git

# Nice Dirlist

A single-file solution for pretty directory listings

See it in use at https://static.netsyms.net and https://dl.netsyms.net

## Features

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
    * Add any mirror URLs you have
    * (Recommended) Change the CDN URLs for Bootstrap and FontAwesome to your CDN of choice
