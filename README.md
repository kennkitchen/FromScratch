# FromScratch (II)
(Yes, there was another "FromScratch" a while back!)

## What's Here
Not a lot! But... a lot.

### Structure
* .htaccess - needed for Apache
* index.php - should never get accessed but if it does it redirects to webroot
* www (webroot)
  * index.php - everything goes through here
  * css/js/images - asset files
* Controllers
  * AppController - currently this just sets up Twig
  * PageController - processes all static pages
* Routes
  * Request Class (sanitizes and standardizes)
  * RequestInterface Class
  * Router Class (sends things on their merry way)
* templates (Twig templates)

### Demo Site
[framework.webinology.cloud](https://framework.webinology.cloud)